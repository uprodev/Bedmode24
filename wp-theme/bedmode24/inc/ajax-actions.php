<?php

$actions = [
    'load_more',
    'load_merken',
    'add_to_cart',
    'remove_from_cart',
    'qty_cart',
    'search_nieuws',
];

foreach($actions as $action){
    add_action('wp_ajax_'.$action, $action);
    add_action('wp_ajax_nopriv_'.$action, $action);
}

/* load more posts*/

function load_more(){

    $paged = $_GET['paged']+1;

    $wp_query = new WP_Query([
        'post_type' => 'nieuws',
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);

    while($wp_query->have_posts()): $wp_query->the_post();

        get_template_part('parts/nieuws');

    endwhile;

    wp_reset_postdata();

    die();

}



/* load more merken*/

function load_merken(){

    $paged = $_GET['paged']+1;

    $wp_query = new WP_Query([
        'post_type' => 'merken',
        'posts_per_page' => 9,
        'paged' => $paged,
    ]);

    while($wp_query->have_posts()): $wp_query->the_post();

        get_template_part('parts/merken');

    endwhile;

    wp_reset_postdata();

    die();

}


/**
 * add_to_cart
 */


function add_to_cart() {


    $product_id = (int)$_GET['product_id'];
    $variation_id = (int)$_GET['variation_id'];
    $qty = (int)$_GET['qty']??1;

    $product = wc_get_product($product_id);

    if ($product->is_type('variable')) {
        if($variation_id) {
            $added = WC()->cart->add_to_cart($product_id, $qty, $variation_id);
        }else{
            wp_send_json([
                'alert' => 'no variation',
            ]);
        }
    }else{
        $added = WC()->cart->add_to_cart($product_id, $qty);
    }

    wp_die();

}

/**
 * remove_from_cart
 */

function remove_from_cart() {

    WC()->cart->remove_cart_item( $_GET['key'] );
    wp_send_json([
        'count' => WC()->cart->get_cart_contents_count()
    ]);

    die();
}

/**
 * change qty
 */


function qty_cart(){

    $cart_item_key = $_GET['hash'];
    $product_values = WC()->cart->get_cart_item($cart_item_key);
    $product_quantity = apply_filters('woocommerce_stock_amount_cart_item', apply_filters('woocommerce_stock_amount', preg_replace("/[^0-9\.]/", '', filter_var($_GET['quantity'], FILTER_SANITIZE_NUMBER_INT))), $cart_item_key);
    $passed_validation  = apply_filters('woocommerce_update_cart_validation', true, $cart_item_key, $product_values, $product_quantity);


    if ($passed_validation) {
        WC()->cart->set_quantity($cart_item_key, $product_quantity, true);
    }

    die();
}


/**
 * search
 */

function search_nieuws(){

    $args  = array(
        's'           => $_GET['search'],
        'numberposts' => -1,
        'post_types'  => 'nieuws',
        'relevanssi'  => true,
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'nieuws_category',
                'field' => 'id',
                'terms' => [ $_GET['categ'] ]
            ],
            [
                'taxonomy' => 'nieuws_label',
                'field' => 'id',
                'terms' => [ $_GET['soort'] ]
            ]
        ]
    );

    $query = new WP_Query( $args );

    $query->parse_query( $args );

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $max_pages = $query->max_num_pages;
    add_filter( 'pre_option_relevanssi_excerpts', '__return_false' );

    relevanssi_do_query( $query );?>

        <div class="content p-0 d-flex flex-wrap">
            <?php while($query->have_posts()): $query->the_post();
                get_template_part('parts/nieuws');

            endwhile;?>

        </div>

    <?php if( $paged < $max_pages ):?>

        <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
            <a href="#" data-paged="<?= $paged;?>" data-max_page="<?= $max_pages;?>" class="btn-default rounded-5 btn-shadow btn-blue" id="aload">Meer laden</a>
        </div>

    <?php endif;?>

    <?php remove_filter( 'pre_option_relevanssi_excerpts', '__return_false' );

    die();

}
