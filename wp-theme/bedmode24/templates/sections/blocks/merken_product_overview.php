<?php

$default= get_sub_field('custom__default_product_selection');
$custom= get_sub_field('product_selector');
$merks = get_sub_field('product_eigenschappen_selector');

?>

<section class="product-content bg-light-grey pt-5">
    <div class="container">
        <div class="row">
            <div class="content p-0 d-flex justify-content-between flex-wrap">
                <div class="filter">
                    <a href="#" class="close-filter"><i class="fal fa-times"></i></a>
                    <h5 class="title-filter">Filteren</h5>
                    <div class="content-filter">
                        <?= do_shortcode('[br_filters_group group_id=425]');?>
                    </div>
                </div>
                <div class="content-item">
                    <div class="sort-line d-flex flex-wrap justify-content-between">
                        <div class="btn-mob-open-filter">
                            <a href="#"><i class="fal fa-filter"></i> Filter</a>
                        </div>
                        <div class="filter-select d-flex flex-wrap">
                            <?php woocommerce_result_count();?>
                            <?= do_shortcode('[br_filters_group group_id=428]');?>
                        </div>
                        <?php woocommerce_catalog_ordering();?>
                    </div>
                    <div class="sorted-content d-flex flex-wrap">

                        <?php if($default):
                            
                            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                            $args = [
                                'post_type' => 'product',
                                'posts_per_page' => 12,
                                'paged' => $paged,
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'pa_merk',
                                        'field' => 'id',
                                        'terms' => $merks
                                    ]
                                ]
                            ];
                            $args = berocket_filter_query_vars_hook($args);

                            $wp_query = new WP_Query($args);

                            while($wp_query->have_posts()): $wp_query->the_post();?>

                                <div class="product-item product-item-border ">
                                    <?php wc_get_template_part( 'content', 'product' );?>
                                </div>

                            <?php endwhile; wp_reset_query();

                        else:

                            if( $custom ):

                                foreach( $custom as $post): setup_postdata($post);?>

                                    <div class="product-item product-item-border ">
                                        <?php wc_get_template_part( 'content', 'product' );?>
                                    </div>

                               <?php  endforeach;  wp_reset_query();

                            endif;

                        endif;?>

                    </div>
                    <?php woocommerce_pagination();?>
                </div>
            </div>
        </div>
    </div>
</section>
