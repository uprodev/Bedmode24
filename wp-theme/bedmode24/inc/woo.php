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

