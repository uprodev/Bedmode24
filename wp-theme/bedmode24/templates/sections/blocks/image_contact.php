<?php

$text= get_sub_field('text');
$text2= get_sub_field('text_2');
$image= get_sub_field('image');
$quote__title= get_sub_field('quote__title');
$contact_info= get_sub_field('contact_info');

?>

<section class="text-default ">
    <div class="container">
        <div class="row justify-content-between">

            <?php if($text):?>
                <div class="content col-md-6 col-12 m-auto p-0">
                    <?= $text;?>
                </div>
            <?php endif;?>

            <div class="img-contact d-flex justify-content-between flex-wrap align-items-center p-0">
                <?php if($image):?>
                    <figure class="col-md-6 col-12 m-0">
                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                    </figure>
                <?php endif;?>
                <div class="text col-md-6 col-12">

                    <?= $quote__title;?>

                    <div class="user-block d-flex justify-content-between flex-wrap">
                        <?php if($contact_info['image']):?>
                            <div class="icon-user">
                                <img src="<?= $contact_info['image']['url'];?>" alt="<?= $contact_info['image']['alt'];?>">
                            </div>
                        <?php endif;?>
                        <div class="user-info">
                            <?php if($contact_info['title']):?>
                                <h6 class="user-title"><?= $contact_info['title'];?></h6>
                            <?php endif;?>

                            <?php if($contact_info['links']):
                                foreach($contact_info['links'] as $ci):
                                    $link = $ci['link'];

                                    if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <p><a class="" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><i class="<?= $ci['fa_icon'];?>"></i><?= esc_html($link_title); ?></a></p>
                                    <?php endif; ?>

                                <?php endforeach;
                            endif;?>

                        </div>
                    </div>
                </div>
            </div>

            <?php if($text2):?>
                <div class="content col-md-6 col-12 m-auto p-0">
                    <?= $text2;?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
