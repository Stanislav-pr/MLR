<?php

$title = get_sub_field('title');
$intro_text = get_sub_field('intro_text');

?>

<section class="algorithm-section<?= is_front_page() ? '' : ' algorithm-page';?>">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section<?= is_front_page() ? '' : ' title-two-row';?>">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <div class="algorithm-wrap">
            <?php if ($intro_text) : ?>
                <div class="algorithm-info">
                    <?php echo wp_kses_post($intro_text); ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('algorithm_steps')) : ?>
                <div class="algorithm-content">
                    <?php while (have_rows('algorithm_steps')) : the_row(); ?>
                        <?php
                        $step_number = get_sub_field('step_number');
                        $step_title = get_sub_field('step_title');
                        $step_content = get_sub_field('step_content');
                        $step_note = get_sub_field('step_note');
                        $is_last = ($step_number === '*');
                        ?>
                        <div class="algorithm-item <?php echo $is_last ? 'algorithm-item-last' : ''; ?>">
                            <?php if ($step_number) : ?>
                                <div class="algorithm-item-number"><?php echo esc_html($step_number); ?></div>
                            <?php endif; ?>

                            <div class="algorithm-item-content">
                                <?php if ($step_title) : ?>
                                    <div class="algorithm-item-title"><?php echo esc_html($step_title); ?></div>
                                <?php endif; ?>

                                <?php if ($step_content) : ?>
                                    <p class="list-title"><?php echo wp_kses_post($step_content); ?></p>
                                <?php endif; ?>

                                <?php if (have_rows('step_list')) : ?>
                                    <ul>
                                        <?php while (have_rows('step_list')) : the_row(); ?>
                                            <?php if ($list_item = get_sub_field('list_item')) : ?>
                                                <li><?php echo wp_kses_post($list_item); ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if ($step_note) : ?>
                                    <p class="note"><?php echo esc_html($step_note); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
