<?php

$title = get_sub_field('title');
$shortcode = get_sub_field('shortcode');

?>

<section class="testimonials">
    <div class="container">
        <div class="row">

            <?php if($title):?>
                <h2 class="title col-12 p-0"><?= $title;?></h2>
            <?php endif;?>

            <?php if($shortcode):?>
                <div class="wrap">
                    <?= do_shortcode(''.$shortcode.'');?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
