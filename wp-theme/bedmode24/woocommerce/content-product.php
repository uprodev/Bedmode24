<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$cat = get_the_terms(get_the_ID(), 'product_cat');

if($product->is_on_sale()):?>

    <span class="label">SALE</span>

<?php endif;?>

<figure>
    <a href="<?php the_permalink();?>">
        <?php woocommerce_template_loop_product_thumbnail();?>
<!--        <span class="material">Materiaal</span>-->
<!--        <span class="new"><span>Nieuw</span></span>-->
    </a>
</figure>
<div class="text">
    <?php if($cat):?>
        <p class="subtitle"><?= $cat[0]->name;?></p>
    <?php endif;?>
    <h6 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
    <div class="<?= $product->is_in_stock()?'on':'off';?> info"><span></span>Op voorraad</div>
    <p class="price"><?php woocommerce_template_loop_price();?></p>
    <div class="btn-wrap">
        <a href="<?php the_permalink();?>" class="btn-default rounded-5 btn-shadow">Bekijken</a>
    </div>
</div>
