<?php
function cptui_register_my_cpts_merken() {

    /**
     * Post Type: Merken.
     */

    $labels = [
        "name" => esc_html__( "Merken"),
        "singular_name" => esc_html__( "Merken" ),
    ];

    $args = [
        "label" => esc_html__( "Merken" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "merken", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-editor-bold",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "merken", $args );
}

add_action( 'init', 'cptui_register_my_cpts_merken' );


function cptui_register_my_cpts_nieuws() {

    /**
     * Post Type: Kennisbank.
     */

    $labels = [
        "name" => esc_html__( "Kennisbank" ),
        "singular_name" => esc_html__( "Kennisbank" ),
    ];

    $args = [
        "label" => esc_html__( "Kennisbank" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "nieuws", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-welcome-write-blog",
        "supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "nieuws", $args );

    register_taxonomy("nieuws_category", array("nieuws"), array("hierarchical" => true, "label" => __("Kennisbank Categories", "bedmode24"), "query_var" => true, "rewrite" => true, "show_in_rest" => true));

    register_taxonomy("nieuws_label", array("nieuws"), array("hierarchical" => true, "label" => __("Kennisbank Labels", "bedmode24"), "query_var" => true, "rewrite" => true, "show_in_rest" => true));
}

add_action( 'init', 'cptui_register_my_cpts_nieuws' );


function cptui_register_my_cpts_landingspagina() {

    /**
     * Post Type: Landingspagina.
     */

    $labels = [
        "name" => esc_html__( "Landingspagina" ),
        "singular_name" => esc_html__( "Landingspagina" ),
    ];

    $args = [
        "label" => esc_html__( "Landingspagina" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => true,
        "query_var" => true,
        "menu_icon" => "dashicons-format-aside",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "landingspagina", $args );
}

add_action( 'init', 'cptui_register_my_cpts_landingspagina' );

