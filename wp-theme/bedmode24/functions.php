<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/post-types.php';  // post types
include 'inc/ajax-actions.php';// ajax actions
include 'inc/woo.php';         // woocommerce actions

add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu(){
	register_nav_menus( array(
        'footer1' => 'Footer 1',
        'footer2' => 'Footer 2',
        'footer3' => 'Footer 3',
        'footer4' => 'Footer 4',
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


/* change landingspagina permalink*/

function na_remove_slug_from_cpt($post_link, $post, $leavename) {
    if ('landingspagina' != $post->post_type || 'publish' != $post->post_status) {
        return $post_link;
    }
    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    return $post_link;
}
add_filter('post_type_link', 'na_remove_slug_from_cpt', 10, 3);

function na_parse_request_trick($query) {

    if (!$query->is_main_query())
        return;


    if (2 != count($query->query) || !isset($query->query['page'])) {
        return;
    }

    if (!empty($query->query['name'])) {
        $query->set('post_type', array('landingspagina'));
    }
}
add_action('pre_get_posts', 'na_parse_request_trick');


add_filter('request', function( $vars ) {
    global $wpdb;
    if( ! empty( $vars['pagename'] ) || ! empty( $vars['category_name'] ) || ! empty( $vars['name'] ) || ! empty( $vars['attachment'] ) ) {
        $slug = ! empty( $vars['pagename'] ) ? $vars['pagename'] : ( ! empty( $vars['name'] ) ? $vars['name'] : ( !empty( $vars['category_name'] ) ? $vars['category_name'] : $vars['attachment'] ) );
        $exists = $wpdb->get_var( $wpdb->prepare( "SELECT t.term_id FROM $wpdb->terms t LEFT JOIN $wpdb->term_taxonomy tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'product_cat' AND t.slug = %s" ,array( $slug )));
        if( $exists ){
            $old_vars = $vars;
            $vars = array('product_cat' => $slug );
            if ( !empty( $old_vars['paged'] ) || !empty( $old_vars['page'] ) )
                $vars['paged'] = ! empty( $old_vars['paged'] ) ? $old_vars['paged'] : $old_vars['page'];
            if ( !empty( $old_vars['orderby'] ) )
                $vars['orderby'] = $old_vars['orderby'];
            if ( !empty( $old_vars['order'] ) )
                $vars['order'] = $old_vars['order'];
        }
    }
    return $vars;
});

