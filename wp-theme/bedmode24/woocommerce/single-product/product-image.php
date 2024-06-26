<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$post_thumbnail_id = $product->get_image_id();

?>

<div class="swiper slider-big">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?= wp_get_attachment_image_src( $post_thumbnail_id, 'large' )[0] ?>" alt="">
        </div>
        <?php if ( $attachment_ids && $product->get_image_id() ) {
            foreach ( $attachment_ids as $attachment_id ) {?>
                <div class="swiper-slide">
                    <img src="<?= wp_get_attachment_image_src( $attachment_id, 'large' )[0] ?>" alt="">
                </div>
            <?php }
        }?>
    </div>

</div>

<?php do_action( 'woocommerce_product_thumbnails' );
