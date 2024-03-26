<?php

$big = get_sub_field('big_item');
$title = $big['title'];
$subtitle = $big['subtitle'];
$img = $big['image'];
$link = $big['link'];
if( $link ) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

$items = get_sub_field('items');
$info = get_sub_field('info');

?>

<section class="home-banner">
    <div class="container">
        <div class="row">
            <div class="big-item col-12 col-lg-6 ">
                <?php if( $link ):?>
                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                <?php else:?>
                    <a href="#">
                <?php endif;?>
                    <?php if($img):?>
                        <figure>
                            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                        </figure>
                    <?php endif;?>
                    <div class="text-block">
                        <?php if($subtitle):?>
                            <h6 class="sub-title"><?= $subtitle;?></h6>
                        <?php endif;?>
                        <?php if($title):?>
                            <h1 class="title"><?= $title;?></h1>
                        <?php endif;?>
                    </div>
                <?php if( $link ):?>
                    <div class="arrow-wrap">
                        <span>
                            <i class="fal fa-long-arrow-right"></i>
                        </span>
                    </div>
                <?php endif;?>
                </a>

            </div>

            <?php if($items):?>
                <div class="small-wrap d-flex justify-content-between flex-wrap col-12 col-lg-6">
                    <?php foreach ($items as $item):
                        $title = $item['title'];
                        $subtitle = $item['subtitle'];
                        $img = $item['image'];
                        $link = $item['link'];
                        if( $link ) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }?>

                        <div class="item<?= $link?'':' no-link';?>">
                            <?php if( $link ):?>
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                            <?php else:?>
                                <a href="#">
                            <?php endif;?>
                                <?php if($img):?>
                                    <figure>
                                        <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                    </figure>
                                <?php endif;?>
                                <div class="text-block">
                                    <?php if($subtitle):?>
                                        <h6 class="sub-title"><?= $subtitle;?></h6>
                                    <?php endif;?>
                                    <?php if($title):?>
                                        <h2 class="title"><?= $title;?></h2>
                                    <?php endif;?>
                                </div>
                            <?php if( $link ):?>
                                <div class="arrow-wrap">
                                    <span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </span>
                                </div>
                            <?php endif;?>
                            </a>
                        </div>

                    <?php endforeach;?>
                </div>
            <?php endif;?>

            <?php if($info):?>
                <div class="info col-12 d-grid p-0">
                    <?php foreach($info as $in):?>

                        <div class="info-item">
                            <?php if($in['icon']):?>
                                <figure>
                                    <i class="<?= $in['icon'];?>"></i>
                                </figure>
                            <?php endif;?>
                            <div class="text-info">
                                <?php if($in['title']):?>
                                    <h3 class="text-title"><?= $in['title'];?></h3>
                                <?php endif;?>
                                <?php if($in['text']):?>
                                    <p><?= $in['text'];?></p>
                                <?php endif;?>
                            </div>
                        </div>

                    <?php endforeach;?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
