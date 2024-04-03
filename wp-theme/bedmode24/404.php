<?php

get_header();

$img = get_field('background_image_404', 'options');
$subtitle = get_field('subtitle_404', 'options');
$title = get_field('title_404', 'options');
$text = get_field('description_404', 'options');
$link = get_field('cta_button_404', 'options');
$link2 = get_field('second_button_404', 'options');

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

<?php get_footer();