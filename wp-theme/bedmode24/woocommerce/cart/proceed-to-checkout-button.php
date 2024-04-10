<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$verder = get_field('verder_met_bestellen_button', get_option( 'woocommerce_cart_page_id' ));
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button wc-forward btn-default btn-blue btn-mini rounded-5 px-4">
    <?= $verder??'Verder met bestellen';?>
</a>
