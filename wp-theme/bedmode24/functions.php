<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/post-types.php';  // ajax actions
include 'inc/ajax-actions.php';// ajax actions

add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'header',
        'mob-menu'  => 'mobile',
       )
    );
	add_theme_support( 'post-thumbnails');
    add_theme_support( 'woocommerce');
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}


//add_action('wp_enqueue_scripts', 'wpcf7_recaptcha_no_refill', 15, 0);
function wpcf7_recaptcha_no_refill() {
    $service = WPCF7_RECAPTCHA::get_instance();
    if ( ! $service->is_active() ) { return; }
    wp_add_inline_script('contact-form-7', 'wpcf7.cached = 0;', 'before' );
}