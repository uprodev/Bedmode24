<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

    <section class="other-product pb-5">
        <div class="container">
            <div class="row">
                <h2 class="title-section">Gerelateerde producten</h2>
                <div class="content p-0 d-flex flex-wrap">
                    <div class="swiper slider-product col-12 slider-product-2">
                        <div class="swiper-wrapper">

                            <?php foreach ( $related_products as $related_product ) : ?>

                                <?php
                                $post_object = get_post( $related_product->get_id() );

                                setup_postdata( $GLOBALS['post'] =& $post_object ); ?>

                                    <div class="product-item product-item-border swiper-slide">
                                        <?php wc_get_template_part( 'content', 'product' );?>
                                    </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="swiper-pagination product-pagination product-pagination-2"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

	<?php
endif;

wp_reset_postdata();
