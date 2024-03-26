<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text= get_sub_field('text');
$link = get_sub_field('link');
$image = get_sub_field('image');
$bg = get_sub_field('background');
$width = get_sub_field('container_width');
$position = get_sub_field('image_position');

?>

<section class="img-text<?= $width?' small-block':'';?><?= $position?' img-text-revers':'';?><?= $bg=='grey'?'':' bg-light-grey';?>">
    <div class="container">
        <div class="row">
            <div class="content d-flex justify-content-between flex-wrap align-items-center">

                <?php if($image):?>
                    <figure class="col-sm-6 col-12">
                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                    </figure>
                <?php endif;?>

                <div class="text col-sm-5 col-12">

                    <?php if($subtitle):?>
                        <h6 class="sub-title"><?= $subtitle;?></h6>
                    <?php endif;?>

                    <?php if($title):?>
                        <h2><?= $title;?></h2>
                    <?php endif;?>

                    <?= $text;?>

                    <?php if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="btn-wrap">
                            <a class="btn-default rounded-5" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
