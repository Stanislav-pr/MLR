<?php

$title = get_sub_field('title');

?>

<section class="can-do-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section title-two-row">
                <span class="line line-1"></span>
                <div class="line-text"><?= $title; ?></div>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <div class="can-do-list">
            <div class="can-do-left">
                <?php if (have_rows('left_items')) : ?>
                    <?php while (have_rows('left_items')) : the_row(); ?>
                        <div class="can-do-item">
                            <?php if ($item_title = get_sub_field('item_title')) : ?>
                                <div class="title-can-do"><?php echo esc_html($item_title); ?></div>
                            <?php endif; ?>
                            <?php if ($item_text = get_sub_field('item_text')) : ?>
                                <div class="text-can-do"><?php echo esc_html($item_text); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="can-do-right">
                <?php if (have_rows('right_items')) : ?>
                    <?php while (have_rows('right_items')) : the_row(); ?>
                        <div class="can-do-item">
                            <?php if ($item_title = get_sub_field('item_title')) : ?>
                                <div class="title-can-do"><?php echo esc_html($item_title); ?></div>
                            <?php endif; ?>
                            <?php if ($item_text = get_sub_field('item_text')) : ?>
                                <div class="text-can-do"><?php echo esc_html($item_text); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
