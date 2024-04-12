<?php

$default = get_sub_field('custom_or_default_cards');
$cards = get_sub_field('card_items');
$link_text = get_sub_field('load_more_button_text');
$title = get_sub_field('title');
?>

<section class="card-3x pb-8">
    <div class="container">
        <div class="row">
            <?php if($title):?>
                <h2 class="p-0 text-center mb-4"><?= $title;?></h2>
            <?php endif;?>
            <div class="content p-0 d-grid ajax-merken">
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
                else:

                    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                    $wp_query = new WP_Query([
                       'post_type' => 'merken',
                        'posts_per_page' => 9,
                        'paged' => get_query_var( 'paged' )??1,
                    ]);

                    $max_pages = $wp_query->max_num_pages;

                    while($wp_query->have_posts()): $wp_query->the_post();

                        get_template_part('parts/merken');

                    endwhile; wp_reset_postdata();

                endif;?>

            </div>
            <?php if(!$default):?>
                <?php if( $paged < $max_pages ):?>

                    <div class="btn-wrap d-flex justify-content-center">
                        <a href="#" data-paged="<?= $paged;?>" data-max_page="<?= $max_pages;?>" class="btn-default btn-blue rounded-5 px-5 btn-shadow" id="mload"><?= $link_text?$link_text:'Meer laden';?></a>
                    </div>

                <?php endif;?>

            <?php endif;?>
        </div>
    </div>
</section>
