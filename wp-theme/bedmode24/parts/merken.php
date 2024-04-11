<div class="item">
    <a href="<?php the_permalink();?>">
        <figure>
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        </figure>
        <div class="text">
            <h6 class="subtitle">Merk</h6>
            <h3 class="title"><?php the_title();?></h3>
            <div class="arrow-wrap">
                <span>
                    <i class="fal fa-long-arrow-right"></i>
                </span>
            </div>
        </div>
    </a>
</div>
