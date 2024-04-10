<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

if(is_shop()){
    $ids = wc_get_page_id( 'shop' );
    $title = get_field('title', $ids);
    $name = get_the_title($ids);
    $link = get_field('optional_white_button', $ids);
    $img = get_field('category_banner_image', $ids);
    $text = get_field('text', $ids);
}else{
    $ids = get_queried_object()->term_id;
    $name = get_queried_object()->name;
    $title = get_field('title', 'product_cat_'.$ids);
    $link = get_field('optional_white_button', 'product_cat_'.$ids);
    $img = get_field('category_banner_image', 'product_cat_'.$ids);
    $text = get_field('text', 'product_cat_'.$ids);
    $desc = '<p>'.get_queried_object()->description.'</p>';
}




?>

    <section class="page-title-bg page-title-bg-small bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="bg p-0">
                    <img src="<?= $img??get_template_directory_uri().'/img/bg-11.jpg';?>" alt="" class="img">
                    <img src="<?= $img??get_template_directory_uri().'/img/bg-11.jpg';?>" alt="" class="img img-mob">
                </div>
                <div class="content ">
                    <h1><?= $title??$name;?></h1>
                    <?= $text??$desc;?>
                </div>
            </div>
        </div>
    </section>

    <section class="product-content bg-light-grey">
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
<!--                                <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>1 persoons</p>-->
<!--                                <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>Patroon</p>-->
<!--                                <p><a href="#" class="close-item-filter"><i class="fal fa-times"></i></a>Filters resetten</p>-->
                                <?= do_shortcode('[br_filters_group group_id=428]');?>
                            </div>

                            <?php woocommerce_catalog_ordering();?>

                        </div>
                        <?php if ( woocommerce_product_loop() ) :?>
                            <div class="sorted-content d-flex flex-wrap">

                                <?php if ( wc_get_loop_prop( 'total' ) ) {
                                    while ( have_posts() ) { the_post();
                                        do_action( 'woocommerce_shop_loop' );?>

                                        <div class="product-item product-item-border ">
                                            <?php wc_get_template_part( 'content', 'product' );?>
                                        </div>
                                    <?php }
                                }?>


                            </div>

                            <?php do_action( 'woocommerce_after_shop_loop' );?>

                        <?php else:

                            do_action( 'woocommerce_no_products_found' );

                        endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-section text-section-2 ">
        <div class="container">
            <div class="row">
                <div class="content">
                    <h6 class="subtitle">Subtitle</h6>
                    <h2 class="title">H2 Text heading</h2>
                    <div class="wrap">
                        <p>Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
                        <p>Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                    <div class="btn-wrap d-flex justify-content-center">
                        <a href="#" class="btn-default btn-blue btn-shadow px-5 rounded-5">Call to action</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="text-default bg-light-grey">
        <div class="container">
            <div class="row justify-content-between">
                <div class="content col-md-6 col-12 m-auto p-0">
                    <h2>H2 Vestibulum id ligula porta felis euismod semper</h2>
                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla.</p>

                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <h3>H3 Donec sed odio dui</h3>
                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <h3>H3 Hier een opsomming</h3>
                    <ul>
                        <li><a href="#">Hier ruimte voor een stuk tekst</a></li>
                        <li>Lorem ipsum dolor sit amet, consectetue voor een stuk tekst</li>
                        <li>Hier ruimte voor een stuk tekst</li>
                        <li>Lorem ipsum dolor sit amet, consectetuor een stuk tekst</li>
                        <li>Hier ruimte voor een stuk tekst</li>
                    </ul>

                    <figure>
                        <img src="img/img-14.jpg" alt="">
                    </figure>

                    <h3>H3 Donec sed odio dui</h3>
                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();
