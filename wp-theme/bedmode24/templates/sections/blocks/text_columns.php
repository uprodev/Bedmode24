<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$link = get_sub_field('link');
$col = get_sub_field('columns');

?>

<section class="text-section<?= $col?' text-section-2':'';?> bg-light-grey">
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if($subtitle):?>
                    <h6 class="subtitle"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h2 class="title"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <div class="wrap">
                        <?= $text;?>
                    </div>
                <?php endif;?>

                <?php if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="btn-wrap d-flex justify-content-center">
                        <a class="btn-default btn-blue btn-shadow px-5 rounded-5" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</section>
