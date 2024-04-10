<?php $logo = get_field('logo', 'options');?>
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