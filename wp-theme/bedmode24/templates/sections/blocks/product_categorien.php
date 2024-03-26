<?php

$title = get_sub_field('title');
$categorien= get_sub_field('card_items');
$link_btn = get_sub_field('link');

?>

<section class="small-links-3x">
    <div class="container">
        <div class="row">

            <?php if($title):?>
                <h2 class="p-0 col-12"><?= $title;?></h2>
            <?php endif;?>

            <?php if($categorien):?>
                <div class="content d-grid col-12 p-0">

                    <?php foreach ($categorien as $cat):
                        $title = $cat['title'];
                        $image = $cat['image'];
                        $link = $cat['link'];
                        if( $link ) {
                            $link_url = $link['url'] ? $link['url'] : '#';
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }
                        ?>

                        <div class="item">
                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                <?php if($image):?>
                                    <div class="bg">
                                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                                    </div>
                                <?php endif;?>

                                <?php if($image):?>
                                    <div class="text">
                                        <h6 class="title"><?= $title;?></h6>
                                    </div>
                                <?php endif;?>

                                <?php if($link):?>
                                    <div class="link-wrap">
                                        <div class="link">
                                            <span>
                                                <i class="fal fa-long-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                <?php endif;?>
                            </a>
                        </div>
                    <?php endforeach;?>

                </div>
            <?php endif; ?>

            <?php if( $link_btn ):
                $link_btn_url = $link_btn['url'];
                $link_btn_title = $link_btn['title'];
                $link_btn_target = $link_btn['target'] ? $link_btn['target'] : '_self';
                ?>
                <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
                    <a class="btn-default rounded-5 btn-shadow btn-blue" href="<?= esc_url($link_btn_url); ?>" target="<?= esc_attr($link_btn_target); ?>"><?= esc_html($link_btn_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
