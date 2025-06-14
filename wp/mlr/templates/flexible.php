<?php $id = get_the_ID(); ?>

<?php if( have_rows('flexible_sections', $id) ): ?>

    <?php while( have_rows('flexible_sections', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif;