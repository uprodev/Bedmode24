<?php

$default = get_sub_field('custom_or_default_cards');
$cards = get_sub_field('card_items');
$link_text = get_sub_field('load_more_button_text');

?>

<section class="card-3x pb-8">
    <div class="container">
        <div class="row">
            <div class="content p-0 d-grid">
                <?php if($default):
                    if($cards):
                        foreach ($cards as $card):
                            $link = $card['link'];

                            if( $link ) {
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            }?>
                            <div class="item">
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                    <?php if($card['image']):?>
                                        <figure>
                                            <img src="<?= $card['image']['url'];?>" alt="<?= $card['image']['alt'];?>">
                                        </figure>
                                    <?php endif;?>
                                    <div class="text">
                                        <?php if($card['subtitle']):?>
                                            <h6 class="subtitle"><?= $card['subtitle'];?></h6>
                                        <?php endif;?>
                                        <?php if($card['title']):?>
                                            <h3 class="title"><?= $card['title'];?></h3>
                                        <?php endif;?>
                                        <?php if($link):?>
                                            <div class="arrow-wrap">
                                                <span><i class="fal fa-long-arrow-right"></i></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;
                        endif;
                else:?>
                    <div class="item">
                        <a href="#">
                            <figure>
                                <img src="img/logo-1.svg" alt="">
                            </figure>
                            <div class="text">
                                <h6 class="subtitle">Merk</h6>
                                <h3 class="title">Beddinghouse</h3>
                                <div class="arrow-wrap">
                                            <span>
                                                <i class="fal fa-long-arrow-right"></i>
                                            </span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif;?>

            </div>
            <?php if(!$default):?>
                <div class="btn-wrap d-flex justify-content-center">
                    <a href="#" class="btn-default btn-blue rounded-5 px-5 btn-shadow"><?= $link_text?$link_text:'Meer laden';?></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
