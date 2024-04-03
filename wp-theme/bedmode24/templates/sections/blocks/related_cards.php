<?php

$title = get_sub_field('title');
$items= get_sub_field('items');

?>

<section class="card-3x card-3x-about">
    <div class="container">
        <div class="row">
            <?php if($title):?>
                <h2 class="title"><?= $title;?></h2>
            <?php endif;?>

            <?php if($items):?>
                <div class="content p-0 d-grid">
                    <?php foreach ($items as $item):
                        $title = $item['title'];
                        $subtitle = $item['subtitle'];
                        $link = $item['link'];
                        $img = $item['image'];
                        ?>
                        <div class="item">
                            <?php if($img):?>
                                <figure>
                                    <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                </figure>
                            <?php endif;?>

                            <div class="text">
                                <?php if($title):?>
                                    <h6 class="subtitle"><?= $title;?></h6>
                                <?php endif;?>

                                <?php if($title):?>
                                    <h3 class="title"><?= $title;?></h3>
                                <?php endif;?>

                                <?php if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="arrow-wrap" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                        <span>
											<i class="fal fa-long-arrow-right"></i>
										</span>
                                    </a>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>