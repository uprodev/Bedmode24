<?php

$linktext = get_sub_field('load_more_button_text');
$show = get_sub_field('visibility_small_cta_block');
$title_cta = get_sub_field('title_cta');
$form = get_sub_field('form_cta');

global $wp_query;

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$wp_query = new WP_Query([
    'post_type' => array('nieuws'),
    'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
]);

$max_pages = $wp_query->max_num_pages;

$i = 1;

?>

<section class="base-3x ">
    <div class="container">
        <div class="row content-ajax">
            <div class="content p-0 d-flex flex-wrap">
                <?php while($wp_query->have_posts()): $wp_query->the_post();

                    get_template_part('parts/nieuws');

                    if($i==6):
                        if($show):?>

                            <div class="item-form d-flex justify-content-between flex-wrap">
                                <?php if($title_cta):?>
                                    <div class="text-form">
                                        <h6><?= $title_cta;?></h6>
                                    </div>
                                <?php endif;?>

                                <?php if($form):?>
                                    <div class="form-wrap">
                                        <?= do_shortcode('[contact-form-7 id="'.$form.'"]');?>
                                    </div>
                                <?php endif;?>

                            </div>

                        <?php endif;

                    endif;

                    $i++;

                endwhile; wp_reset_postdata();?>

            </div>


            <?php if( $paged < $max_pages ):?>

                <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
                    <a href="#" data-paged="<?= $paged;?>" data-max_page="<?= $max_pages;?>" class="btn-default rounded-5 btn-shadow btn-blue" id="aload"><?= $linktext?$linktext:'Meer laden';?></a>
                </div>

            <?php endif;?>
        </div>
    </div>
</section>
