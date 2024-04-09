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

$show_sale = get_field('show_sale_label');
$sale = get_field('sale_label');

$cat = get_the_terms(get_the_ID(), 'product_cat');

$description = $product->get_description();

if ($product->is_type( 'variable' )) {
    $variations = ($product->get_available_variations());
    $default_attributes = $product->get_default_attributes();
    $variations_attr = ($product->get_variation_attributes());

    foreach($product->get_available_variations() as $variation_values ){
        foreach($variation_values['attributes'] as $key => $attribute_value ){
            $attribute_name = str_replace( 'attribute_', '', $key );
            $default_value = $product->get_variation_default_attribute($attribute_name);
            if( $default_value == $attribute_value ){
                $is_default_variation = true;
            } else {
                $is_default_variation = false;
                break;
            }
        }
        if( $is_default_variation ){
            $variation_id = $variation_values['variation_id'];
            break;
        }
    }
    if( $is_default_variation ){
        $default_variation = wc_get_product($variation_id);
        $price = $default_variation->get_price();
    }
}

$attributes = $product->get_attributes();

?>
<section class="product-inner bg-light-grey">
    <div class="container">
        <div class="row justify-content-between">
            <div class="slider-wrap col-xl-5 col-12 col-lg-6">

                <?php if($show_sale):?>
                    <div class="label"><?= $sale;?></div>
                <?php endif;?>

                <?php  woocommerce_show_product_images();?>

            </div>

            <div class="text col-lg-6 col-12">

                <?php if($cat):?>
                    <h6 class="subtitle"><?= $cat[0]->name;?></h6>
                <?php endif;?>

                <?php woocommerce_template_single_title();?>

                <p class="price">
                <?php if ($product->is_type('variable')){
                   if($default_variation && $default_variation->get_price_html()){
                       echo $default_variation->get_price_html();
                   }

                }elseif($product->is_type('simple')) {

                    $product->get_price_html();

                }?>
               </p>

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
                    <?= $description?'<li><span data-title="Beschrijving">Beschrijving</span></li>':'';?>

                    <?= $attributes?'<li><span data-title="Extra informatie">Extra informatie</span></li>':'';?>

                </ul>
                <div class="tab-content">

                    <?php if($description):?>
                        <div class="tab-item">

                            <?= $product->get_description();?>

                        </div>
                    <?php endif;?>

                    <?php if($attributes):?>
                        <div class="tab-item">
                            <div class="tab-table">

                                <?php foreach ( $attributes as $attribute ) :

                                    if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) )
                                        continue;

                                    $values = wc_get_product_terms( $product->get_id(), $attribute['name'], array( 'fields' => 'names' ) );

                                    if( empty( $values ) )
                                        continue;
                                    ?>

                                    <div class="tab-row">
                                        <div class="data data-1">
                                            <p><?php echo wc_attribute_label( $attribute['name'] ); ?></p>
                                        </div>
                                        <div class="data data-2">
                                            <?php foreach($values as $val):
                                                echo '<p>'.$val.'</p>';
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>

                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php woocommerce_upsell_display();?>

<?php woocommerce_output_related_products();