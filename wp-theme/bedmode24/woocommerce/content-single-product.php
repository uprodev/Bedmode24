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

$cat = get_the_terms(get_the_ID(), 'product_cat');
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

                <?php if($cat):?>
                    <h6 class="subtitle"><?= $cat[0]->name;?></h6>
                <?php endif;?>

                <?php woocommerce_template_single_title();?>

                <p class="price"><?= $product->get_price_html();?></p>

                <?php woocommerce_template_single_add_to_cart();?>

                <?php woocommerce_template_single_excerpt();?>

                <?php get_template_part('parts/product_usps');?>

            </div>
        </div>

    </div>
</section>

<section class="product-tabs">
    <div class="container">
        <div class="row justify-content-center">

            <div class="tabs">
                <ul class="tabs-menu">
                    <li><span data-title="Beschrijving">Beschrijving</span></li>
                    <li><span data-title="Extra informatie">Extra informatie</span></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-item">

                        <?= $product->get_description();?>

                    </div>
                    <div class="tab-item">
                        <div class="tab-table">
                            <div class="tab-row">
                                <div class="data data-1">
                                    <p>Lorem</p>
                                </div>
                                <div class="data data-2">
                                    <p>Lorem</p>
                                </div>
                            </div>
                            <div class="tab-row">
                                <div class="data data-1">
                                    <p>Lorem</p>
                                </div>
                                <div class="data data-2">
                                    <p>Lorem</p>
                                </div>
                            </div>
                            <div class="tab-row">
                                <div class="data data-1">
                                    <p>Lorem</p>
                                </div>
                                <div class="data data-2">
                                    <p>Lorem</p>
                                </div>
                            </div>
                            <div class="tab-row">
                                <div class="data data-1">
                                    <p>Lorem</p>
                                </div>
                                <div class="data data-2">
                                    <p>Lorem</p>
                                    <p>Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */

	?>

