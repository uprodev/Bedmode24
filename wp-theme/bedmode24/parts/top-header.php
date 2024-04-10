<?php

$ti1 = get_field('top_item_1', 'options');
$sel = $ti1['star_selector'];

$ti2 = get_field('top_item_2', 'options');
$ti3 = get_field('top_item_3', 'options');
$ti4 = get_field('top_item_4', 'options');
?>

<div class="top-info">
    <div class="container">
        <div class="row">
            <div class="item stars-wrap col-lg-3 p-0 justify-content-center justify-content-lg-start">
                <div class="wrap">
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star-half"></i>
                </div>
                <div class="text">
                    <p><?= $ti1['text_number']?'<b>'.$ti1['text_number'].'</b>':''?> <?= $ti1['reviews'];?></p>
                </div>
            </div>
            <div class="item list col-lg-9 p-0 d-none d-lg-block">
                <ul>
                    <?php if($ti2):?>
                        <li>
                            <i class="far fa-check"></i>
                            <?= $ti2;?>
                        </li>
                    <?php endif;?>
                    <?php if($ti3):?>
                        <li>
                            <i class="far fa-check"></i>
                            <?= $ti3;?>
                        </li>
                    <?php endif;?>
                    <?php if($ti4):?>
                        <li>
                            <i class="far fa-check"></i>
                            <?= $ti4;?>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>
