<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text= get_sub_field('description');
$link = get_sub_field('link');
$col1 = get_sub_field('column_one');
$col2 = get_sub_field('column_two');
$image = get_sub_field('image');
$form = get_sub_field('form');

?>

<section class="base-banner contact-banner bg-grey">

    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['url'];?>" class="img">
        </div>
    <?php endif;?>

    <div class="container z-3">
        <div class="row">
            <div class="text-wrap col-md-6 col-12">
                <?php if($subtitle):?>
                    <h6 class="sub-title"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>

                <?= $text;?>

                <?php if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="btn-wrap">
                        <a class="btn-default rounded-5 px-5 btn-blue btn-shadow" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>

                <ul class="d-flex flex-wrap justify-content-between contact-list">
                    <li>
                        <?php if($col1['title']):?>
                            <h6><?= $col1['title'];?></h6>
                        <?php endif;?>

                        <?= $col1['description'];?>

                        <ul class="list-contact">

                            <?php $link = $col1['telephone'];

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <li><a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><i class="fal fa-phone-alt"></i><?= esc_html($link_title); ?></a></li>
                            <?php endif; ?>

                            <?php $linke = $col1['email'];

                            if( $linke ):
                                $linke_url = $linke['url'];
                                $linke_title = $linke['title'];
                                $linke_target = $linke['target'] ? $linke['target'] : '_self';
                                ?>
                                <li><a href="<?= esc_url($linke_url); ?>" target="<?= esc_attr($linke_target); ?>"><i class="fal fa-at"></i><?= esc_html($linke_title); ?></a></li>
                            <?php endif; ?>

                            <?php $linkr = $col1['route'];

                            if( $linkr ):
                                $linkr_url = $linkr['url'];
                                $linkr_title = $linkr['title'];
                                $linkr_target = $linkr['target'] ? $linkr['target'] : '_self';
                                ?>
                                <li><a href="<?= esc_url($linkr_url); ?>" target="<?= esc_attr($linkr_target); ?>"><i class="fal fa-map-marker-alt"></i><?= esc_html($linkr_title); ?></a></li>
                            <?php endif; ?>

                        </ul>
                    </li>
                    <li>
                        <?php if($col2['title']):?>
                            <h6><?= $col2['title'];?></h6>
                        <?php endif;?>

                        <?= $col2['description'];?>

                        <?php if($col2['title_2']):?>
                            <h6><?= $col2['title_2'];?></h6>
                        <?php endif;?>

                        <?php if($col2['table']):?>
                            <ul class="info-list">
                                <?php foreach ($col2['table'] as $tab):?>
                                    <li>
                                        <?php if($tab['left_item']): ?><p><?= $tab['left_item'];?></p><?php endif;?>
                                        <?php if($tab['right_item']): ?><p><?= $tab['right_item'];?></p><?php endif;?>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>

                        <?= $col2['description_2'];?>

                    </li>
                </ul>
            </div>
            <div class="form-wrap col-md-6 col-12 d-flex justify-content-center align-items-center">

                <?php if($image):?>
                    <div class="bg-mob">
                        <img src="<?= $image['url'];?>" alt="<?= $image['url'];?>" class="img">
                    </div>
                <?php endif;?>

                <?php if($form){
                    echo do_shortcode('[contact-form-7 id="'.$form.'"]');
                }?>
                
            </div>

        </div>
    </div>
</section>
