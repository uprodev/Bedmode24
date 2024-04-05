<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text= get_sub_field('text');
$link = get_sub_field('link');
$slider_content = get_sub_field('slider_content');
$bg = get_sub_field('background');

?>

<section class="slider-block<?= $bg?'':' bg-light-grey';?>">
    <div class="container">
        <div class="row">
            <?php if($subtitle):?>
                <h6 class="subtitle"><?= $subtitle;?></h6>
            <?php endif;?>

            <?php if($title):?>
                <h2 class="title"><?= $title;?></h2>
            <?php endif;?>

            <?= $text;?>

            <?php if($slider_content):?>
                <div class="slider-wrap p-0">
                    <div class="swiper img-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider_content as $slide):
                                $switch = $slide['image__video_switch'];
                                $img = $slide['image'];
                                $url = $slide['youtube__vimeo_url'];
                                $thumb = $slide['image_thumbnail'];
                            ?>
                                <div class="swiper-slide">

                                    <?php if($switch):?>
                                        <div class="video-block">
                                            <a data-fancybox href="<?= $url;?>">
                                                <?php if($thumb):?>
                                                    <img src="<?= $thumb['url'];?>" alt="<?= $thumb['alt'];?>">
                                                <?php endif;?>
                                                <span class="icon-wrap">
                                                    <i class="fal fa-play-circle"></i>
                                                </span>
                                            </a>
                                        </div>
                                    <?php else:?>
                                        <figure>
                                            <?php if($img):?>
                                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                            <?php endif;?>
                                        </figure>
                                    <?php endif;?>

                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="swiper-pagination img-pagination"></div>
                    </div>
                    <div class="nav-wrap">
                        <div class="swiper-button-next img-next"><i class="fal fa-arrow-circle-right"></i></div>
                        <div class="swiper-button-prev img-prev"><i class="fal fa-arrow-circle-left"></i></div>
                    </div>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
