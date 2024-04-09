<?php

get_header();

if(is_cart() || is_checkout()){
    the_content();
}else {
    get_template_part('templates/flexible');
}

get_footer();