<?php

$flag_image = get_sub_field('flag_image');
$main_title = get_sub_field('main_title');
$content = get_sub_field('content');

?>

<section class="collab-section">
    <div class="container">
        <h2 class="nothalf-title">
            <span class="line-1">
                <?php if ($flag_image) : ?>
                    <img src="<?php echo esc_url($flag_image['url']); ?>" alt="<?php echo esc_attr
                    ($flag_image['alt']); ?>">
                <?php endif; ?>
            </span>
            <?php if ($main_title) : ?>
                <div class="line-wrap">
                    <span class="line-text"><?= $main_title; ?></span>
                    <span class="line-2"></span>
                </div>
            <?php endif; ?>
        </h2>

        <div class="collab-wrap">
            <div class="collab-flag">
                <?php if ($flag_image) : ?>
                    <img src="<?php echo esc_url($flag_image['url']); ?>"
                         alt="<?php echo esc_attr($flag_image['alt']); ?>">
                <?php endif; ?>
            </div>

            <?php if ($content) : ?>
                <div class="collab-content">
                    <?php echo wp_kses_post($content); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
