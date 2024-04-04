<?php

$title = get_sub_field('title');
$size = get_sub_field('grid_size');
$default= get_sub_field('custom_or_default');
$custom= get_sub_field('custom_products');

if($size){
    $num = 4;
}else{
    $num = 8;
}

if($default){
    $prods = $custom;
}else{
    $prods = new WP_Query([
       'post_type' => 'product',
       'posts_per_page' => $num,
    ]);
}

?>

<section class="product-content product-4x py-5">
    <div class="container">
        <div class="row">
            <div class="content p-0 d-flex justify-content-between flex-wrap">

                <div class="content-4x col-12 p-0 d-grid">
                    <div class="product-item product-item-border ">
                        <span class="label">SALE</span>
                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                                <span class="material">Materiaal</span>
                                <span class="new"><span>Nieuw</span></span>
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-border ">

                        <figure>
                            <a href="#">
                                <img src="img/img-8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="subtitle">Dekbedovertrekken</p>
                            <h6 class="title"><a href="#">Dekbed 90% Dons Enkel</a></h6>
                            <p class="price">€134,95 – €259,95</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default rounded-5 btn-shadow">Bekijken</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
