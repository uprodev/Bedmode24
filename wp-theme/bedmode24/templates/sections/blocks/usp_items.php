<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$items= get_sub_field('items');
$link = get_sub_field('primary_button');
$bg= get_sub_field('background');

?>

<section class="item-4x<?= $bg?' bg-light-grey':'';?>">
    <div class="container">
        <div class="row">

            <?php if($subtitle):?>
                <h6 class="subtitle p-0"><?= $subtitle;?></h6>
            <?php endif;?>

            <?php if($title):?>
                <h2 class="title p-0"><?= $title;?></h2>
            <?php endif;?>

            <?php if($items):?>
                <div class="content p-0 d-grid">
                    <?php foreach ($items as $item):
                        $title = $item['title'];
                        $text = $item['description'];
                        $icon = $item['fa_icon'];
                    ?>
                        <div class="item">
                            <?php if($icon):?>
                                <div class="icon-wrap">
                                    <i class="<?= $icon;?>"></i>
                                </div>
                            <?php endif;?>

                            <?php if($title):?>
                                <h3 class="item-title"><?= $title;?></h3>
                            <?php endif;?>

                            <?= $text;?>

                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
