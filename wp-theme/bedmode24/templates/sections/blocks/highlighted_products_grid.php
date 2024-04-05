<?php

$title = get_sub_field('title');
$size = get_sub_field('grid_size');
$default= get_sub_field('custom_or_default');
$custom= get_sub_field('custom_products');

if($size){
    $num = 4;
}else{
    $num = 8;
}


$prods = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => $num,
]);

?>

<section class="product-content product-4x py-5">
    <div class="container">
        <div class="row">
            <div class="content p-0 d-flex justify-content-between flex-wrap">

                <div class="content-4x col-12 p-0 d-grid">
                    <?php if($default):
                        foreach( $custom as $post): setup_postdata($post); ?>

                            <div class="product-item product-item-border ">
                                <?php wc_get_template_part( 'content', 'product' );?>
                            </div>

                        <?php endforeach; wp_reset_postdata();
                    else:
                        while($prods->have_posts()): $prods->the_post();?>

                            <div class="product-item product-item-border ">
                                <?php wc_get_template_part( 'content', 'product' );?>
                            </div>

                        <?php endwhile; wp_reset_postdata();

                    endif;?>

                </div>
            </div>
        </div>
    </div>
</section>
