<?php

$cat = get_the_terms(get_the_ID(), 'nieuws_category');

?>

<div class="item">
    <div class="text">
        <h6 class="subtitle"><?= $cat[0]->name;?></h6>
        <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <p class="date"><?php the_time('d-m-Y');?></p>
    </div>
    <figure>
        <a href="<?php the_permalink();?>">
            <img src="<?php the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>">
            <div class="arrow-wrap">
                <span><i class="fal fa-long-arrow-right"></i></span>
            </div>
        </a>
    </figure>

</div>
