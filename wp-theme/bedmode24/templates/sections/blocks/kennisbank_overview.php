<?php

$linktext = get_sub_field('load_more_button_text');
$show = get_sub_field('visibility_small_cta_block');
$title_cta = get_sub_field('title_cta');
$form = get_sub_field('form_cta');

$wp_query = new WP_Query([
    'post_type' => array('nieuws', 'landingspagina'),
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DESC',
]);

$i = 1;

?>

<section class="base-3x ">
    <div class="container">
        <div class="row">
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

            <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
                <a href="#" class="btn-default rounded-5 btn-shadow btn-blue"><?= $linktext?$linktext:'Meer laden';?></a>
            </div>
        </div>
    </div>
</section>
