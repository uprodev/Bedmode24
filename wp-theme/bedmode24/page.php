<?php

get_header();

if(is_cart() || is_checkout() ||  is_account_page()  || is_wc_endpoint_url() ){
    the_content();
}else {
    get_template_part('templates/flexible');
}

get_footer();