<?php

$logo = get_field('logo', 'options');
$items = get_field('link_items', 'options');
$menu = get_field('menu', 'options');

?>

<div class="scroll-line">
    <div class="top-line">
        <div class="container">
            <div class="row align-items-center">
                <div class="logo-wrap col-4 col-sm-3 p-0">
                    <?php if($logo):?>

                        <a href="<?= get_home_url();?>">
                            <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                        </a>

                    <?php endif;?>
                </div>
                <div class="wrap col-8 col-sm-9 d-flex justify-content-lg-between justify-content-end">
                    <div class="search-wrap d-none d-lg-block">
                        <?= do_shortcode('[fibosearch]'); ?>
                    </div>

                    <?php if($items):?>
                        <div class="icon-wrap d-flex align-items-center justify-content-end ">
                            <?php foreach($items as $item):

                                $icon = $item['font_awesome_icon'];
                                $switch = $item['switch_popup_shopping_cart_active'];
                                $link = $item['link'];

                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <div class="item">
                                        <a<?= $switch?' class="fancybox-cart"':'';?> href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                            <?php if($icon):?>
                                                <i class="<?= $icon;?>"></i>
                                            <?php endif;?>
                                            <?= esc_html($link_title); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>

                    <div class="open-menu d-flex justify-content-end d-lg-none">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($menu): $m = 1;?>
        <nav class="top-menu-wrap d-lg-flex align-items-center d-none">
            <div class="container">
                <div class="row">
                    <ul class="top-menu d-flex justify-content-between p-0">
                        <?php foreach($menu as $item):

                            $cols = $item['header_columns'];
                            $link = $item['main_link'];?>
                            <li class="sub-item sub-item-<?= $m;?>">
                                <?php if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                                <?php endif; ?>

                                <?php if($cols):?>
                                    <div class="sub-menu">
                                        <div class="content-wrap">
                                            <?php foreach($cols as $col):

                                                $tit = $col['title'];
                                                $lnk = $col['title_link'];
                                                $links = $col['links'];?>
                                                <div class="sub-item">
                                                    <h6>
                                                        <?php if($lnk):
                                                            $link_url = $link['url'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                                                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= $tit; ?> <i class="far fa-arrow-right"></i></a>
                                                        <?php else:
                                                            echo $tit;
                                                        endif;?>
                                                    </h6>
                                                    <?php if($links):?>
                                                        <ul class="sub-list">
                                                            <?php foreach($links as $lk):
                                                                $opt = $lk['link_option'];
                                                                $lka = $lk['link'];
                                                                $color = $lk['color'];

                                                                if( $lka ):
                                                                    $lka_url = $lka['url'];
                                                                    $lka_title = $lka['title'];
                                                                    $lka_target = $lka['target'] ? $lka['target'] : '_self';
                                                                    ?>

                                                                    <li>
                                                                        <a href="<?= esc_url($lka_url); ?>" target="<?= esc_attr($lka_target); ?>">
                                                                            <?php if($opt):?>
                                                                                <span style="background: <?= $color??'#fff'?>; border: 1px solid #0c2e45"></span>
                                                                            <?php endif;?>
                                                                            <?= esc_html($lka_title); ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach;?>
                                                        </ul>
                                                    <?php endif;?>
                                                </div>

                                            <?php endforeach;?>
                                        </div>
                                        <?php get_template_part('parts/right_content_menu');?>
                                    </div>
                                <?php endif;?>

                            </li>
                        <?php $m++;
                        endforeach;?>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif;?>
</div>
