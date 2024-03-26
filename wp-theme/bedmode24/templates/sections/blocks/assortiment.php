<?php

$title = get_sub_field('title');
$prods= get_sub_field('prods');
$link = get_sub_field('link');

?>

<section class="product-mini bg-grey">
    <div class="container">
        <div class="row">
            <?php if($title):?>
                <h2 class="col-12 p-0"><?= $title;?></h2>
            <?php endif;?>

            <?php if($prods):?>
                <div class="swiper slider-product col-12 slider-product-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-item">
                            <span class="label">SALE</span>
                            <figure>
                                <a href="#">
                                    <img src="img/img-4-1.png" alt="">
                                    <span class="material">Materiaal</span>
                                    <span class="new"><span>Nieuw</span></span>
                                </a>
                            </figure>
                            <div class="text">
                                <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                                <div class="on info"><span></span>Op voorraad</div>
                                <p class="price">€134,95 – €259,95</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <figure>
                                <a href="#">
                                    <img src="img/img-4-2.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                                <div class="off info"><span></span>Op voorraad</div>
                                <p class="price">€134,95 – €259,95</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <figure>
                                <a href="#">
                                    <img src="img/img-4-3.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                                <div class="on info"><span></span>Op voorraad</div>
                                <p class="price">€134,95 – €259,95</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <figure>
                                <a href="#">
                                    <img src="img/img-4-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                                <div class="on info"><span></span>Op voorraad</div>
                                <p class="price">€134,95 – €259,95</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <figure>
                                <a href="#">
                                    <img src="img/img-4-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                                <div class="on info"><span></span>Op voorraad</div>
                                <p class="price">€134,95 – €259,95</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination product-pagination product-pagination-1"></div>
                </div>
            <?php endif;?>


            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap-full col-12 p-0 d-flex justify-content-center">
                    <a class="btn-default rounded-5 btn-shadow btn-blue" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
