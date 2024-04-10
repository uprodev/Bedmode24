<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

    <div class="wrap mini-cart-wrap">
        <?php
        do_action( 'woocommerce_before_mini_cart_contents' );

        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                /**
                 * This filter is documented in woocommerce/templates/cart/cart.php.
                 *
                 * @since 2.1.0
                 */
                $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                ?>
                <div class="item ">
                    <figure>
                        <a href="<?php echo esc_url( $product_permalink ); ?>">
                            <?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </a>
                    </figure>
                    <div class="text">
                        <h6> <a href="<?php echo esc_url( $product_permalink ); ?>">
                                <?php echo wp_kses_post( $product_name ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            </a></h6>
                        <div class="input-number">
                            <div class="btn-count btn-count-minus"><i class="fal fa-minus"></i></div>
                            <input type="text" name="count" value="<?= $cart_item['quantity'];?>" class="form-control qty" data-key="<?= esc_attr( $cart_item_key );?>"/>
                            <div class="btn-count btn-count-plus"><i class="fal fa-plus"></i></div>
                        </div>
                        <div class="cost">
                            <p><?= $_product->get_price_html();?></p>
                        </div>
                        <div class="delete-cart-item item-delete">
                            <a href="#" data-cart_item_key="<?= esc_attr( $cart_item_key );?>"><i class="fal fa-times-circle"></i></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }

        do_action( 'woocommerce_mini_cart_contents' );
        ?>


        <div class="btn-wrap">
            <a href="<?= get_permalink(wc_get_page_id( 'cart' ));?>" class="btn-default">Bekijk winkelwagen</a>
            <a href="<?= wc_get_checkout_url();?>" class="btn-default">Afrekenen</a>
        </div>
    </div>



<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>
