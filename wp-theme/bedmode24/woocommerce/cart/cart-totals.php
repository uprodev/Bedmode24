<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
    $taxable_address = WC()->customer->get_taxable_address();
    $estimated_text  = '';

    if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
        /* translators: %s location. */
        $estimated_text = sprintf( ' <span>' . esc_html__( '(Inclusief %s BTW 21% )', 'woocommerce' ) . '</span>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
    }
}
?>

<ul class="total-list col-lg-6 col-12">
    <?php do_action( 'woocommerce_before_cart_totals' ); ?>
    <li class="head-list">Totalen winkelwagen</li>
    <li>
        <p>Subtotaal</p>
        <p><?php wc_cart_totals_subtotal_html(); ?></p>
    </li>
    <li>
        <p>Totaal</p>
        <p><?php wc_cart_totals_order_total_html() . ' '. $estimated_text; ?></p>
    </li>
    <li>
        <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
    </li>
</ul>

	<?php do_action( 'woocommerce_after_cart_totals' );
