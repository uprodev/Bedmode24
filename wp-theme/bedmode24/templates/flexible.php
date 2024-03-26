<?php

$id = get_the_ID();

?>

<?php if( have_rows('banners', $id) ): ?>

    <?php while( have_rows('banners', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/banners/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/blocks/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>