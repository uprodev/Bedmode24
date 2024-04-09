<?php

add_filter('woocommerce_catalog_orderby', function($order) {
    unset($order['menu_order']);
    unset($order['rating']);
    unset($order['date']);
    $order['popularity'] = __('Populariteit', 'bedmode24');
    $order['price'] = __('Prijs (oplopend)', 'bedmode24');
    $order['price-desc'] = __('Prijs (aflopend)', 'bedmode24');

    return $order;

});


