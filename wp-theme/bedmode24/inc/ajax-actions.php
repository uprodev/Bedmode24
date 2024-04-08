<?php

$actions = [
    'load_more',
];

foreach($actions as $action){
    add_action('wp_ajax_'.$action, $action);
    add_action('wp_ajax_nopriv_'.$action, $action);
}

function load_more(){

    $paged = $_GET['paged']+1;

    $wp_query = new WP_Query([
        'post_type' => array('nieuws', 'landingspagina'),
        'posts_per_page' => 6,
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