<?php

$logo = get_field('logo', 'options');
$menu = get_field('menu', 'options');

?>
<div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
        <div class="close-menu">
            <a href="#"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="wrap">
        <div class="logo-wrap">
            <?php if($logo):?>

                <a href="<?= get_home_url();?>">
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                </a>

            <?php endif;?>
        </div>

        <?php if($menu): $m=1;?>
            <nav class="mob-menu-wrap">
                <ul class="mob-menu p-0">
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
                            <?php if($cols):
                                foreach($cols as $col):
                                    $links = $col['links'];
                                    if($links):?>
                                            <ul class="sub-menu">
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
                                    <?php endif;
                                endforeach;
                            endif;?>
                        </li>
                        <?php $m++;
                    endforeach;?>
                </ul>
            </nav>
        <?php endif;?>

        <div class="search-wrap">
            <?= do_shortcode('[fibosearch]'); ?>
        </div>
    </div>
</div>