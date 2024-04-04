<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$bg = get_sub_field('background_color');
$width = get_sub_field('container_width');

?>

<section class="text-default<?= $bg?' bg-light-grey':'';?>">
    <div class="container">
        <div class="row justify-content-between">
            <div class="content col-md-6 col-<?= $width?'8':'12';?> m-auto p-0">
                <?php if($subtitle):?>
                    <h6 class="subtitle p-0"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?= $text;?>
            </div>
        </div>
    </div>
</section>
