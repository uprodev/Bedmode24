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



