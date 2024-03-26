<?php

$title = get_sub_field('title');
$text= get_sub_field('text');
$bg = get_sub_field('background_title');
$links = get_sub_field('links');

?>

<section class="quick-links">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="title-wrap col-7">

                <?php if($bg):?>
                    <div class="bg">
                        <img src="<?= $bg['url'];?>" alt="<?= $bg['alt'];?>">
                    </div>
                <?php endif;?>

                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>

            </div>
            <div class="text-wrap col-md-5 col-12">

                <?= $text;?>

                <?php if($links):?>
                    <ul>
                        <?php foreach($links as $li):
                            $link = $li['link'];

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <li>
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                        <i class="fal fa-long-arrow-right"></i><?= esc_html($link_title); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
