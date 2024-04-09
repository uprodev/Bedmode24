<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

		<?php wp_head();?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="top-info">
            <div class="container">
                <div class="row">
                    <div class="item stars-wrap col-lg-3 p-0 justify-content-center justify-content-lg-start">
                        <div class="wrap">
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star-half"></i>
                        </div>
                        <div class="text">
                            <p><b>5</b> • <span>30</span> <a href="#">beoordeling</a></p>
                        </div>
                    </div>
                    <div class="item list col-lg-9 p-0 d-none d-lg-block">
                        <ul>
                            <li>
                                <i class="far fa-check"></i>
                                Gratis verzending vanaf €50
                            </li>
                            <li>
                                <i class="far fa-check"></i>
                                Gratis retourneren
                            </li>
                            <li>
                                <i class="far fa-check"></i>
                                Voor 21:00 besteld? Morgen in huis!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-line">
            <div class="top-line">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="logo-wrap col-4 col-sm-3 p-0">
                            <?php $logo = get_field('logo', 'options');

                            if($logo):?>

                                <a href="<?= get_home_url();?>">
                                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                                </a>

                            <?php endif;?>
                        </div>
                        <div class="wrap col-8 col-sm-9 d-flex justify-content-lg-between justify-content-end">
                            <div class="search-wrap d-none d-lg-block">
                                <?= do_shortcode('[fibosearch]'); ?>
                            </div>
                            <div class="icon-wrap d-flex align-items-center justify-content-end ">
                                <div class="item item-service">
                                    <a href="#">
                                        <i class="fal fa-headset"></i>
                                        Service
                                    </a>
                                </div>
                                <div class="item item-account">
                                    <a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>">
                                        <i class="fal fa-user"></i>
                                        Account
                                    </a>
                                </div>
                                <div class="item item-cart">
                                    <a href="#cart" class="fancybox-cart">
                                        <i class="fal fa-shopping-cart"></i>
                                        Winkelwagen
                                    </a>
                                </div>
                            </div>
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
            <nav class="top-menu-wrap d-lg-flex align-items-center d-none">
                <div class="container">
                    <div class="row">
                        <ul class="top-menu d-flex justify-content-between p-0">
                            <li class="sub-item sub-item-1">
                                <a href="#">Dekbedovertrekken</a>
                                <div class="sub-menu ">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">1 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-2">
                                <a href="#">Hoeslakens</a>
                                <div class="sub-menu ">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">22 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-3">
                                <a href="#">Dekbedden</a>
                                <div class="sub-menu">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">33 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-4">
                                <a href="#">Lakens</a>
                                <div class="sub-menu">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">44 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-5">
                                <a href="#">Hoofdkussens</a>
                                <div class="sub-menu">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">55 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-6">
                                <a href="#">Kussenslopen</a>
                                <div class="sub-menu">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">66 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sub-item sub-item-7">
                                <a href="#">Merken</a>
                                <div class="sub-menu">
                                    <div class="content-wrap">
                                        <div class="sub-item">
                                            <h6><a href="#">MATEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">77 Persoons</a></li>
                                                <li><a href="#">2 Persoons</a></li>
                                                <li><a href="#">Lits - Jumeax</a></li>
                                                <li><a href="#">Lits - Jumeax XL</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">MATERIALEN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Katoen</a></li>
                                                <li><a href="#">Flanel</a></li>
                                                <li><a href="#">Katoen - Satijn</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6 class="no-link"><a href="#">DESSING <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#">Effen</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                                <li><a href="#">Print / patroon</a></li>
                                            </ul>
                                        </div>
                                        <div class="sub-item">
                                            <h6><a href="#">KLEUREN <i class="far fa-arrow-right"></i></a></h6>
                                            <ul class="sub-list">
                                                <li><a href="#"><span style="background: #fff; border: 1px solid #0c2e45"></span>Wit</a></li>
                                                <li><a href="#"><span style="background: #b5b6b7;"></span>Beige</a></li>
                                                <li><a href="#"><span style="background: grey;"></span>Wit</a></li>
                                                <li><a href="#">Bekijk alle kleuren</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <p class="number">5.0</p>
                                        <div class="stars-wrap">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="link">30 <a href="#">beoordelingen</a></p>
                                        <div class="text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </nav>
        </div>

    </header>

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
            <nav class="mob-menu-wrap">
                <ul class="mob-menu p-0">
                    <li class="sub-item ">
                        <a href="#">Dekbedovertrekken</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item">
                        <a href="#">Hoeslakens</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item">
                        <a href="#">Dekbedden</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item ">
                        <a href="#">Lakens</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item sub-item-5">
                        <a href="#">Hoofdkussens</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item sub-item-6">
                        <a href="#">Kussenslopen</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                    <li class="sub-item sub-item-7">
                        <a href="#">Merken</a>
                        <ul class="sub-menu">
                            <li><a href="#">1 Persoons</a></li>
                            <li><a href="#">2 Persoons</a></li>
                            <li><a href="#">Lits - Jumeax</a></li>
                            <li><a href="#">Lits - Jumeax XL</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="search-wrap">
                <?= do_shortcode('[fibosearch]'); ?>
            </div>
        </div>
    </div>

    <main>