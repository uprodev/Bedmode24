<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text= get_sub_field('description');
$link = get_sub_field('link');
$image = get_sub_field('background_image');
$image_mob = get_sub_field('mobile_background_image');
$pl1 = get_sub_field('placeholder_option_1');
$pl2 = get_sub_field('placeholder_option_2');
$cats = get_terms(['taxonomy' => 'nieuws_category', 'hide_empty' => false,]);
?>

<section class="page-title-bg base-filter">
    <div class="bg">
        <?php if($image):?>
            <img src="<?= $image['url'];?>" alt="<?= $image['url'];?>" class="img">
        <?php endif;?>
        <?php if($image_mob):?>
            <img src="<?= $image_mob['url'];?>" alt="<?= $image_mob['url'];?>" class="img img-mob">
        <?php endif;?>
    </div>
    <div class="container">
        <div class="row">
            <div class="content p-0">
                <?php if($subtitle):?>
                    <h6 class="subtitle"><?= $subtitle;?></h6>
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
                        <a class="btn-default rounded-5 px-5" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="filter-wrap">
        <div class="container">
            <div class="row">
                <form action="#" class="p-0">
                    <div class="filter-content d-flex justify-content-between flex-wrap">
                        <div class="select-block input-wrap select-block-1">
                            <label class="form-label" for="select-1"></label>
                            <select id="select-1" name="categorien">
                                <option value="" disabled selected><?= $pl1?$pl1:'Productiecategorie';?></option>
                                <?php foreach($cats as $ct):?>
                                    <option value="<?= $ct->term_id;?>"><?= $ct->name;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="select-block input-wrap select-block-2">
                            <label class="form-label" for="select-2"></label>
                            <select id="select-2" name="soort">
                                <option value="0" disabled selected><?= $pl2?$pl2:'Soort [Bijv. Inspiratie of blog]';?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="input-wrap">
                            <label for="search-base"></label>
                            <input type="search" id="search" name="s" placeholder="Zoekwoord…">
                        </div>
                        <div class="input-wrap-submit">
                            <button type="submit" class="btn-default rounded-5 btn-white"><i class="fal fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
