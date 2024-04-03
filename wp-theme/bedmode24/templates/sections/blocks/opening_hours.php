<?php

$title = get_sub_field('title');
$hours = get_sub_field('opening_hours');

?>

<section class="opening-hours">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/bg-10.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="content">
                <?php if($title):?>
                    <h2 class="title"><?= $title;?></h2>
                <?php endif;?>

                <?php if($hours):?>
                    <div class="wrap d-grid">
                        <?php foreach($hours as $hour):?>
                            <div class="item">
                                <div class="line"></div>
                                <?php if($hour['day']):?>
                                    <h6 class="sub"><?= $hour['day'];?></h6>
                                <?php endif;?>
                                <?php if($hour['inner']):?>
                                    <ul>
                                        <?php foreach($hour['inner'] as $ic):?>
                                            <li>
                                                <p><?= $ic['left'];?></p>
                                                <p><?= $ic['right'];?></p>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                <?php endif;?>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
