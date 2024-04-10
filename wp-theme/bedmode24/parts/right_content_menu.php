<?php

$rc = get_field('right_content', 'options');
$num = $rc['number'];
$sel = $rc['star_selection'];
$text = $rc['text'];
$desc = $rc['description'];

?>

<div class="stars">

    <?php if($num):?>
        <p class="number"><?= $num;?></p>
    <?php endif;?>
    <div class="stars-wrap">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
    </div>
    <?php if($text):?>
        <p class="link"><?= $text;?></p>
    <?php endif;?>
    <?php if($desc):?>
        <div class="text">
            <?= $desc;?>
        </div>
    <?php endif;?>
</div>