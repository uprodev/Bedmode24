<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;

$img = get_field('background_image_ty', 'options');
$subtitle = get_field('subtitle_ty', 'options');
$title = get_field('title_ty', 'options');
$text = get_field('description_ty', 'options');
$link = get_field('cta_button_ty', 'options');
$link2 = get_field('second_button_ty', 'options');

?>

<section class="block-404">
    <?php if($img):?>
        <div class="bg">
            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
        </div>
    <?php endif;?>
    <div class="container">
        <div class="row">
            <div class="content p-0">
                <?php if($subtitle):?>
                    <h6 class="subtitle"><?= $subtitle;?></h6>
                <?php endif;?>
                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>
                <?php if($text):?>
                    <div class="text">
                        <?= $text;?>
                    </div>
                <?php endif;?>
                <?php if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="btn-wrap d-flex flex-wrap">
                        <a class="btn-default rounded-5 btn-block" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>

                <?php if( $link2 ):
                    $link2_url = $link2['url'];
                    $link2_title = $link2['title'];
                    $link2_target = $link2['target'] ? $link2['target'] : '_self';
                    ?>
                    <div class="btn-wrap d-flex flex-wrap">
                        <a class="btn-default rounded-5 btn-block" href="<?= esc_url($link2_url); ?>" target="<?= esc_attr($link2_target); ?>"><?= esc_html($link2_title); ?></a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
