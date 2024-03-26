<?php

$title = get_sub_field('title');
$cards= get_sub_field('card_items');
$link_btn = get_sub_field('link');

?>

<section class="card-links">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/bg-0.png" alt="" class="bg">
    </div>
    <div class="container">
        <div class="row">

            <?php if($title):?>
                <h2 class="p-0 col-12"><?= $title;?></h2>
            <?php endif;?>

            <?php if($cards):
                $i=1;?>

                <div class="content p-0 col-12 d-flex justify-content-between flex-wrap">

                    <?php foreach ($cards as $cat):
                        $title = $cat['title'];
                        $subtitle = $cat['subtitle'];
                        $image = $cat['image'];
                        $link = $cat['link'];
                        if( $link ) {
                            $link_url = $link['url'] ? $link['url'] : '#1';
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }
                        ?>

                        <div class="item item-1 col-sm-<?= ($i==1||$i==4)?'7':'5';?> col-12">

                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                <?php if($image):?>
                                    <div class="bg">
                                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                                    </div>
                                <?php endif;?>

                                <div class="wrap">
                                    <?php if($subtitle):?>
                                        <h6 class="sub-title"><?= $subtitle;?></h6>
                                    <?php endif;?>
                                    <?php if($title):?>
                                        <h3 class="title"><?= $title;?></h3>
                                    <?php endif;?>
                                </div>
                                <?php if($link):?>
                                    <div class="arrow-wrap">
									<span>
										<i class="fal fa-long-arrow-right"></i>
									</span>
                                    </div>
                                <?php endif;?>
                            </a>
                        </div>

                    <?php $i++;

                    endforeach;?>

                </div>

            <?php endif;?>

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
