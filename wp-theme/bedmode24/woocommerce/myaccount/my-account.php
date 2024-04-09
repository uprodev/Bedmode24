<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

?>

<section class="cart-block bg-light-grey account">
    <div class="container">
        <div class="row">
            <h1 class="p-0"><?php the_title();?></h1>
            <div class="content p-0">

                <?php

                    do_action( 'woocommerce_account_navigation' );

                    do_action( 'woocommerce_account_content' );

                ?>

            </div>

        </div>
    </div>
</section>

