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
$show_sale = get_field('show_sale_label');
$sale = get_field('sale_label');
$show_new = get_field('show_new_label');
$new = get_field('new_label');
$show_material = get_field('show_material_label');
$material = get_field('materiaal');

$cat = get_the_terms(get_the_ID(), 'product_cat');

if($show_sale):?>
    <span class="label"><?= $sale;?></span>
<?php endif;?>

<figure>
    <a href="<?php the_permalink();?>">
        <?php woocommerce_template_loop_product_thumbnail();?>

        <?php if($show_material):?>
            <span class="material"><?= $material;?></span>
        <?php endif;?>
        <?php if($show_new):?>
            <span class="new"><span><?= $new;?></span></span>
        <?php endif;?>

    </a>
</figure>
<div class="text">
    <?php if($cat):?>
        <p class="subtitle"><?= $cat[0]->name;?></p>
    <?php endif;?>
    <h6 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
    <div class="<?= $product->is_in_stock()?'on':'off';?> info"><span></span>Op voorraad</div>
    <p class="price"><?php woocommerce_template_loop_price();?></p>

    <?php woocommerce_template_loop_add_to_cart();?>

</div>
