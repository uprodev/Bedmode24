<?php

/* sort */

add_filter('woocommerce_catalog_orderby', function($order) {
    unset($order['menu_order']);
    unset($order['rating']);
    unset($order['date']);
    $order['popularity'] = __('Populariteit', 'bedmode24');
    $order['price'] = __('Prijs (oplopend)', 'bedmode24');
    $order['price-desc'] = __('Prijs (aflopend)', 'bedmode24');

    return $order;

});

/* fragments */

function add_points_widget_to_fragment( $fragments ) {

    ob_start();
    woocommerce_mini_cart();
    $fragments['.mini-cart-wrap'] = ob_get_clean();

    return $fragments;
}
add_filter('add_to_cart_fragments', 'add_points_widget_to_fragment');


/* change url variation */

add_action('woocommerce_before_variations_form', function() {
    if (!empty($_GET)) {
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($)
            {
                <?php
                foreach ($_GET as $key => $value) {


                ?>
                $("select[name='attribute_pa_<?php echo esc_js($key); ?>']").val('<?php echo esc_js($value); ?>').change();
                <?php

                }
                ?>
            });
        </script>
        <?php
    }
});




/* EAN field */


add_action( 'woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields' );

add_action( 'woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save' );

function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
    echo '<div class="product_custom_field">';
    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_ean',
            'placeholder' => 'EAN',
            'label' => __('EAN', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );

    echo '</div>';
}

function woocommerce_product_custom_fields_save($post_id)
{
    $woocommerce_custom_product_text_field = $_POST['_ean'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, '_ean', esc_attr($woocommerce_custom_product_text_field));

}


add_action( 'woocommerce_product_after_variable_attributes', 'ean_field', 10, 3 );

function ean_field( $loop, $variation_data, $variation ) {

    woocommerce_wp_text_input(
        array(
            'id'            => 'text_field[' . $loop . ']',
            'label'         => 'EAN',
            'wrapper_class' => 'form-row',
            'placeholder'   => 'EAN',
            'desc_tip'      => true,
            'description'   => '',
            'value'         => get_post_meta( $variation->ID, 'ean_text_field', true )
        )
    );

}

add_action( 'woocommerce_save_product_variation', 'ean_save_fields', 10, 2 );

function ean_save_fields( $variation_id, $loop ) {

    $text_field = ! empty( $_POST[ 'text_field' ][ $loop ] ) ? $_POST[ 'text_field' ][ $loop ] : '';
    update_post_meta( $variation_id, 'ean_text', sanitize_text_field( $text_field ) );


}

add_action( 'woocommerce_available_variation', 'product_variation_group_of_quantity', 10, 3 );
function product_variation_group_of_quantity( $variation_data, $product, $variation ) {
    // Adding to the main product form the group of quantity custom field (for each variation)
    $variation_data['ean'] = $variation->get_meta('ean_text');

    return $variation_data;
}


/* min variation price */

add_filter( 'woocommerce_variable_price_html', 'min_variation_price', 20, 2 );

function min_variation_price( $price, $product ) {

    $min_regular_price = $product->get_variation_regular_price( 'min', true );
    $min_sale_price = $product->get_variation_sale_price( 'min', true );
    $max_regular_price = $product->get_variation_regular_price( 'max', true );
    $max_sale_price = $product->get_variation_sale_price( 'max', true );

    if ( ! ( $min_regular_price == $max_regular_price && $min_sale_price == $max_sale_price ) ) {
        $price = sprintf( '%1$s', wc_price( $min_regular_price ) );
    }

    return $price;

}


/*  alert text */

add_filter( 'woocommerce_get_script_data', 'change_alert_text', 10, 2 );
function change_alert_text( $params, $handle ) {
    if ( $handle === 'wc-add-to-cart-variation' )
        $params['i18n_make_a_selection_text'] = get_field('alert', 'options');
    return $params;
}

//add_action( 'template_redirect', 'redirect_cat_to_relevant_filter' );

function redirect_cat_to_relevant_filter() {
    if ( is_product_category() ) {

        $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $url = str_replace('product-category/','', $actual_link);

        wp_safe_redirect( $url );
        exit;
    }
}


