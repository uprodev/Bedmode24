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
                        <div style="width: 100%; height: 700px; background: blue;"></div>
                    </div>
                </div>
                <div class="content-item">
                    <div class="sort-line d-flex flex-wrap justify-content-between">
                        <div class="btn-mob-open-filter">
                            <a href="#"><i class="fal fa-filter"></i> Filter</a>
                        </div>
                        <div class="filter-select d-flex flex-wrap">
                            <p>15 producten gevonden</p>
                            <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>1 persoons</p>
                            <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>Patroon</p>
                            <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>Filters resetten</p>
                        </div>
                        <div class="select-block ">
                            <label class="form-label" for="select"></label>
                            <select id="select">
                                <option value="0" selected disabled>Sorteren...</option>
                                <option value="1">Populariteit</option>
                                <option value="2">Prijs (oplopend) </option>
                                <option value="3">Prijs (aflopend)</option>
                            </select>
                        </div>
                    </div>
                    <div class="sorted-content d-flex flex-wrap">

                        <?php if($default):

                            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                            $wp_query = new WP_Query([
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
                            ]);

                            while($wp_query->have_posts()): $wp_query->the_post();?>

                                <div class="product-item product-item-border ">
                                    <?php wc_get_template_part( 'content', 'product' );?>
                                </div>

                            <?php endwhile; wp_reset_postdata();

                        else:

                            if( $custom ):

                                foreach( $custom as $post): setup_postdata($post);?>

                                    <div class="product-item product-item-border ">
                                        <?php wc_get_template_part( 'content', 'product' );?>
                                    </div>

                               <?php  endforeach;  wp_reset_postdata();

                            endif;

                        endif;?>

                    </div>
                    <div class="pagination-wrap">
                        <ul class="pagination d-flex">
                            <li><a href="#"><i class="far fa-chevron-left"></i></a></li>
                            <li><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="far fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
