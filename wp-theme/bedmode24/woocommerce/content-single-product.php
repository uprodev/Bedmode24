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
                    <li class="li-info "><span></span> Op voorraad</li>
                    <li class="cost d-flex align-items-start">
                        <?php woocommerce_template_single_price();?>
                    </li>
                </ul>
                <?php woocommerce_template_single_add_to_cart();?>

                <?php woocommerce_template_single_excerpt();?>


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

