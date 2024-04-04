<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text= get_sub_field('description');
$link = get_sub_field('link');
$image = get_sub_field('background_image');
$image_mob = get_sub_field('mobile_background_image');
$switch = get_sub_field('card_switch');
$card_title = get_sub_field('card_title');
$quick_links = get_sub_field('quick_links');

?>

<section class="page-title-bg lading-title">
    <div class="bg">
        <?php if($image):?>
            <img src="<?= $image['url'];?>" alt="<?= $image['url'];?>" class="img">
        <?php endif;?>
        <?php if($image_mob):?>
            <img src="<?= $image_mob['url'];?>" alt="<?= $image_mob['url'];?>" class="im img-mobg">
        <?php endif;?>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="content p-0">
                <?php if($subtitle):?>
                    <h6 class="sub-title"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>

                <?= $text;?>

                <?php if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="btn-wrap">
                        <a class="btn-default rounded-5 px-5" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>

            </div>

            <?php if($switch):?>
                <div class="info-lading">

                    <?php if($card_title):?>
                        <h6 class="title-h6"><?= $card_title;?></h6>
                    <?php endif;?>

                    <?php if($quick_links):?>
                        <ul>
                            <?php foreach ($quick_links as $li):
                                $link = $li['link'];

                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <li>
                                        <a class="" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                            <i class="far fa-arrow-right"></i>
                                            <?= esc_html($link_title); ?></a>
                                    </li>
                                <?php endif; ?>

                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
