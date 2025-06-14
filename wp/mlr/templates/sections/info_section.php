<?php

$title = get_sub_field('title');
$main_text = get_sub_field('main_text');
$highlighted_text = get_sub_field('highlighted_text');

?>

<section class="info-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <div class="info-wrap">
            <?php if ($main_text) : ?>
                <div class="info-text">
                    <?php echo wp_kses_post($main_text); ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('services_list')) : ?>
                <ul class="default-list list-columns">
                    <?php while (have_rows('services_list')) : the_row(); ?>
                        <?php if ($service = get_sub_field('service_item')) : ?>
                            <li><?php echo esc_html($service); ?></li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php if ($highlighted_text) : ?>
                <p class="bold-text"><?php echo esc_html($highlighted_text); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
