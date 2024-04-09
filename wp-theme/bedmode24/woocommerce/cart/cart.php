<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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

do_action( 'woocommerce_before_cart' ); ?>

<section class="cart-block bg-light-grey">
    <div class="container">
        <div class="row">
            <h1 class="p-0"><?php the_title();?></h1>
            <div class="content p-0">
                <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                    <?php do_action( 'woocommerce_before_cart_table' ); ?>
                    <div class="table-info">
                        <div class="table-row table-head">
                            <div class="data data-1"></div>
                            <div class="data data-2">Product</div>
                            <div class="data data-3">Prijs</div>
                            <div class="data data-4">Aantal</div>
                            <div class="data data-5">Subtotaal</div>
                        </div>
                        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                        /**
                         * Filter the product name.
                         *
                         * @since 2.1.0
                         * @param string $product_name Name of the product in the cart.
                         * @param array $cart_item The product in the cart.
                         * @param string $cart_item_key Key for the product in the cart.
                         */
                        $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                            <div class="table-row">
                                <div class="data data-1">
                                    <div class="del-item">
                                        <a href="#"><i class="fal fa-times-circle"></i></a>
                                    </div>
                                    <figure>
                                        <?php $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                        if ( ! $product_permalink ) {
                                        echo $thumbnail; // PHPCS: XSS ok.
                                        } else {
                                        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                        }
                                        ?>
                                    </figure>
                                </div>
                                <div class="data data-2">
                                    <?php
                                        if ( ! $product_permalink ) {
                                            echo wp_kses_post( $product_name . '&nbsp;' );
                                        } else {
                                            /**
                                             * This filter is documented above.
                                             *
                                             * @since 2.1.0
                                             */
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                        }

                                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );?>
                                </div>
                                <div class="data data-3" data-title="Prijs">
                                    <?php
                                    echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                </div>
                                <div class="data data-4" data-title="Aantal">
                                    <label for="col-item"></label>
                                    <?php $product_quantity = woocommerce_quantity_input(
                                    array(
                                    'input_name'   => "cart[{$cart_item_key}][qty]",
                                    'input_value'  => $cart_item['quantity'],
                                    'product_name' => $product_name,
                                    ),
                                    $_product,
                                    false
                                    );

                                    echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                    ?>
                                </div>
                                <div class="data data-5" data-title="Subtotaal">
                                    <?php
                                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                </div>
                            </div>

                            <?php }
                        }
                        ?>

                        <?php do_action( 'woocommerce_cart_contents' ); ?>
                        <div class="table-row-bottom">

                            <?php if ( wc_coupons_enabled() ) { ?>
                                <div class="data data-1">
                                    <label for="code"></label>
                                    <input type="text" name="coupon_code" id="coupon_code" value="" placeholder="Waardebon code" />

                                    <button type="submit" class="btn-default btn-blue btn-mini rounded-5 px-4" name="apply_coupon" value="Waardebon toepassen">Waardebon toepassen</button>
                                    <?php do_action( 'woocommerce_cart_coupon' ); ?>
                                </div>

                            <?php } ?>

                            <div class="data data-2">
                                <button type="submit" class="btn-default btn-blue btn-mini rounded-5 px-4" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">Update winkelwagen</button>

                                <?php do_action( 'woocommerce_cart_actions' ); ?>

                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                            </div>


                        </div>
                    </div>
                    <?php do_action( 'woocommerce_after_cart_table' ); ?>

                    <?php do_action( 'woocommerce_before_cart_collaterals' );?>
                    <div class="total-wrap d-flex justify-content-end cart-collaterals">
                        <?php
                        /**
                         * Cart collaterals hook.
                         *
                         * @hooked woocommerce_cross_sell_display
                         * @hooked woocommerce_cart_totals - 10
                         */
                        do_action( 'woocommerce_cart_collaterals' );
                        ?>

                    </div>
                </form>

            </div>

        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_cart' ); ?>

<section class="home-banner bg-light-grey">
    <div class="container">
        <div class="row">
            <div class="info col-12 d-grid p-0">
                <div class="info-item">
                    <figure>
                        <i class="fal fa-truck-container"></i>
                    </figure>
                    <div class="text-info">
                        <h3 class="text-title">Snelle bezorging</h3>
                        <p>Voor 21:00 besteld, morgen in huis</p>
                    </div>
                </div>
                <div class="info-item">
                    <figure>
                        <i class="far fa-comet"></i>
                    </figure>
                    <div class="text-info">
                        <h3 class="text-title">Gratis verzending</h3>
                        <p>Vanaf €50,-</p>
                    </div>
                </div>
                <div class="info-item">
                    <figure>
                        <i class="fal fa-shield-check"></i>
                    </figure>
                    <div class="text-info">
                        <h3 class="text-title">1 jaar garantie</h3>
                        <p>Aenean eu leo quam</p>
                    </div>
                </div>
                <div class="info-item">
                    <figure>
                        <i class="fas fa-headset"></i>
                    </figure>
                    <div class="text-info">
                        <h3 class="text-title">Goede service</h3>
                        <p>Voor 21:00 besteld, morgen in huis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
