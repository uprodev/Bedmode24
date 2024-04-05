<?php

$title = get_sub_field('title');
$prods= get_sub_field('prods');
$link = get_sub_field('link');
$bgc = get_sub_field('background_color');
$default = get_sub_field('default');

$def = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 6,
]);
?>

<section class="product-mini bg-<?= $bgc;?>">
    <div class="container">
        <div class="row">
            <?php if($title):?>
                <h2 class="col-12 p-0"><?= $title;?></h2>
            <?php endif;?>

            <div class="swiper slider-product col-12 slider-product-1">
                <div class="swiper-wrapper">
                    <?php if($default):
                        while($def->have_posts()): $def->the_post();?>

                            <div class="swiper-slide product-item">
                                <?php wc_get_template_part( 'content', 'product' );?>
                            </div>

                        <?php endwhile; wp_reset_postdata();

                    else:

                        foreach( $prods as $post): setup_postdata($post); ?>

                            <div class="swiper-slide product-item">
                                <?php wc_get_template_part( 'content', 'product' );?>
                            </div>

                        <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif;?>
                </div>
                <div class="swiper-pagination product-pagination product-pagination-1"></div>
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
