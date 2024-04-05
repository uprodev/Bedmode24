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
                        <div class="icon-user">
                            <img src="img/icon-user.svg" alt="">
                        </div>
                        <div class="user-info">
                            <h6 class="user-title">Neem contact op</h6>
                            <p><a href="tel:+0401234567"><i class="fal fa-phone-alt"></i>040 - 123 45 67</a></p>
                            <p><a href="mailto:naam@bedrijfsnaam.nl"><i class="fal fa-envelope"></i>naam@bedrijfsnaam.nl</a></p>
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
