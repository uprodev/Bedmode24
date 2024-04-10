<?php

$logo = get_field('logo', 'options');
$items = get_field('link_items', 'options');

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
