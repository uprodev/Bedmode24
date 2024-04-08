<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$default= get_sub_field('custom__default');
$custom= get_sub_field('custom');
$ids = get_the_ID();

?>

<section class="base-3x ">
    <div class="container">
        <div class="row">
            <?php if($title):?>
                <h2 class="title"><?= $title;?></h2>
            <?php endif;?>
            <div class="content p-0 d-flex flex-wrap slider-wrap">
                <div class="swiper base-slider">
                    <div class="swiper-wrapper">

                        <?php if($default):
                           
                            $ken = new WP_Query([
                               'post_type' => 'nieuws',
                                'posts_per_page' => 3,
                                'post__not_in' => array($ids),
                            ]);
                            while($ken->have_posts()): $ken->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php get_template_part('parts/nieuws');?>
                                </div>
                            <?php endwhile; wp_reset_postdata();

                        else:

                            if( $custom ):
                                foreach( $custom as $post): setup_postdata($post); ?>

                                    <div class="swiper-slide">
                                        <?php get_template_part('parts/nieuws');?>
                                    </div>

                            <?php endforeach; wp_reset_postdata();

                            endif;

                        endif;?>
                    </div>
                    <div class="swiper-pagination base-pagination"></div>
                </div>
            </div>
            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
                    <a class="btn-default rounded-5 btn-shadow btn-blue" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
