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

$idc = get_option( 'woocommerce_cart_page_id' );

$table = get_field('table_title', $idc);
$subtotal_labele = get_field('subtotal_labele', $idc);
$total_price = get_field('total_price', $idc);

?>

<ul class="cart_totals  <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?> total-list col-lg-6 col-12">
    <?php do_action( 'woocommerce_before_cart_totals' ); ?>
    <li class="head-list"><?= $table??'Totalen winkelwagen';?></li>
    <li>
        <p><?= $subtotal_labele??'Subtotaal';?></p>
        <p><?php wc_cart_totals_subtotal_html(); ?></p>
    </li>
        <li>
            <p><?= $total_price??'Totaal';?></p>
            <p><?php wc_cart_totals_order_total_html(); ?> <span>(Inclusief 13,87 BTW 21%)</span>
            </p>
        </li>

        <?php
        if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
            $taxable_address = WC()->customer->get_taxable_address();
            $estimated_text  = '';

            if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                /* translators: %s location. */
                $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
            }

            if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                    ?>
                    <li class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                        <p><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                        <p data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></p>
                    </li>
                    <?php
                }
            } else {
                ?>
                <li class="tax-total">
                    <p><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <p data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></p>
                </li>
                <?php
            }
        }
        ?>


        <li>
            <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
        </li>
    </ul>


		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>


	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

