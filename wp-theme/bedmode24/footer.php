<?php

$title_f1 = get_field('title_column_footer_1', 'options');
$title_f2 = get_field('title_column_footer_2', 'options');
$title_f3 = get_field('title_column_footer_3', 'options');
$title_f4 = get_field('title_column_footer_4', 'options');
$title_f5 = get_field('title_column_footer_5', 'options');
$descr = get_field('subtitle_column_footer_1', 'options');
$street = get_field('street', 'options');
$postalcode = get_field('postalcode', 'options');
$telephone = get_field('telephone', 'options');
$email = get_field('email', 'options');
$social_title = get_field('subtitle_social_footer', 'options');
$socials = get_field('list_social_media', 'options');

?>

</main>

<footer>
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/bg-footer.jpg" alt="" class="bg">
        <!--<img src="img/bg-grid.png" alt="" class="bg-after">-->
    </div>
    <div class="container">
        <div class="row">
            <div class="logo-wrap col-12 d-flex justify-content-center p-0">
                <div class="line"></div>
                <?php $logo = get_field('footer_logo', 'options');

                if($logo):?>

                    <a href="<?= get_home_url();?>">
                        <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                    </a>

                <?php endif;?>
            </div>
            <div class="content p-0 d-grid">
                <div class="item item-1">

                    <?php if($title_f1):?>
                        <h6><?= $title_f1;?></h6>
                    <?php endif;?>
                    <div class="wrap-mob">

                        <?php if($descr):?>
                            <p class="info"><?= $descr;?></p>
                        <?php endif;?>

                        <ul class="info-list">
                            <?php if($street || $postalcode):?>
                                <li>
                                    <p class="text"><i class="fal fa-map-marker-alt"></i><?= $street?><?= $postalcode?'<br> '.$postalcode:'';?></p>
                                </li>
                            <?php endif;?>
                            <?php if($telephone):?>
                                <li>
                                    <a href="tel:+<?= phone_clear($telephone);?>"><i class="fal fa-phone-alt"></i><?= $telephone;?></a>
                                </li>
                            <?php endif;?>
                            <?php if($email):?>
                                <li>
                                    <a href="mailto:<?= $email;?>"><i class="fal fa-envelope"></i><?= $email;?></a>
                                </li>
                            <?php endif;?>
                        </ul>

                        <?php if($social_title):?>
                            <p class="info soc-title"><?= $social_title;?></p>
                        <?php endif;?>

                        <?php if($socials):?>
                            <ul class="soc-list d-flex">
                                <?php foreach ($socials as $soc):?>
                                    <li><a href="<?= $soc['link'];?>" target="_blank"><i class="<?= $soc['icon'];?>"></i></a></li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </div>
                </div>
                <div class="item item-2">

                    <?php if($title_f2):?>
                        <h6><?= $title_f2;?></h6>
                    <?php endif;?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer1',
                        'container' => false,
                        'menu_class' => 'info-list list-footer wrap-mob',
                        'link_before' => '<i class="fal fa-long-arrow-right"></i>',
                    ]);?>

                </div>
                <div class="item item-3">

                    <?php if($title_f3):?>
                        <h6><?= $title_f3;?></h6>
                    <?php endif;?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer2',
                        'container' => false,
                        'menu_class' => 'info-list list-footer wrap-mob',
                        'link_before' => '<i class="fal fa-long-arrow-right"></i>',
                    ]);?>

                </div>
                <div class="item item-4">

                    <?php if($title_f4):?>
                        <h6><?= $title_f4;?></h6>
                    <?php endif;?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer3',
                        'container' => false,
                        'menu_class' => 'info-list list-footer wrap-mob',
                        'link_before' => '<i class="fal fa-long-arrow-right"></i>',
                    ]);?>

                </div>
                <div class="item item-5">

                    <?php if($title_f5):?>
                        <h6><?= $title_f5;?></h6>
                    <?php endif;?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer4',
                        'container' => false,
                        'menu_class' => 'info-list list-footer wrap-mob',
                        'link_before' => '<i class="fal fa-long-arrow-right"></i>',
                    ]);?>

                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="line"></div>
                <div class="text-bottom p-0">
                    <p>Copyright © 2024 BEDMODE24 • Alle genoemde prijzen zijn inclusief BTW • Website door <a href="#">The DISTRIKT</a></p>
                </div>
                <div class="icon-wrap p-0">
                    <ul class="d-flex justify-content-xxl-end justify-content-center">
                        <li class="ideal"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-1.png" alt=""></a></li>
                        <li class="master"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-2.png" alt=""></a></li>
                        <li class="viza"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-3.png" alt=""></a></li>
                        <li class="pay"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-4.png" alt=""></a></li>
                        <li class="rive"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-5.png" alt=""></a></li>
                        <li class="in3"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-6.png" alt=""></a></li>
                        <li class="bill"><a href="#"><img src="<?= get_template_directory_uri();?>/img/footer-7.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="cart-popup" id="cart" style="display: none">
    <div class="top">
        <div class="close-menu close-cart">
            <a href="#"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <?php wc_get_template_part( 'cart/mini-cart' );?>
</div>

  <?php wp_footer(); ?>
	</body>
</html>
