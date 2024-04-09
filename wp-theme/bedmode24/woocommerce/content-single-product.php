<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="product-inner bg-light-grey">
    <div class="container">
        <div class="row justify-content-between">
            <div class="slider-wrap col-xl-5 col-12 col-lg-6">

                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>

            </div>

            <div class="text col-lg-6 col-12">
                <h6 class="subtitle">Dekbedovertrek</h6>
                <h1>Beddinghouse Benthe Grey</h1>
                <p class="price">€39,95</p>
                <div class="wrap-form">
                    <div class="select-block">
                        <label class="form-label" for="lang">Uitvoering</label>
                        <select id="lang">
                            <option value="0">140 x 200/200</option>
                            <option value="1">140 x 100/100</option>
                            <option value="2">100 x 200/200</option>
                            <option value="3">140 x 300/300</option>
                        </select>
                    </div>
                    <div class="number-wrap">
                        <label for="number">Aantal</label>
                        <input type="number" name="number" id="number" value="2">
                    </div>
                </div>
                <ul class="info-product d-flex flex-wrap align-items-start">
                    <li class="li-info "><span></span> 24 Op voorraad</li>
                    <li class="cost d-flex align-items-start">
                        <p class="old">€49,95</p>
                        <p class="new">€39,95</p>
                    </li>
                </ul>
                <div class="btn-wrap">
                    <a href="#" class="btn-blue btn-default rounded-5">Toevoegen aan winkelwagen</a>
                </div>
                <div class="text-wrap">
                    <p>Dekbedovertrek Benthe Grey van Beddinghouse bestaat uit verschillende banen met diverse weefstructuren en grafische motieven. Donkere en lichtere tinten wisselen elkaar af en zorgen voor contrast. Het dekbedovertrek is gemaakt van 100% katoen. Katoen is een natuurlijk product dat ademt en goed vocht opneemt.</p>
                    <p class="ean">EAN <span>8718518398565</span></p>
                </div>

                <ul class="check-list d-flex flex-wrap ">
                    <li><i class="far fa-check"></i> Klanten geven ons een 4,9/5</li>
                    <li><i class="far fa-check"></i> Gratis retourneren</li>
                    <li><i class="far fa-check"></i> Gratis verzending vanaf €50</li>
                    <li><i class="far fa-check"></i> Voor 21:00 besteld? Morgen in huis!</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
