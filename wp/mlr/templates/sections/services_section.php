<?php

$title = get_sub_field('title');

?>

<section class="services-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <?php if (have_rows('services')) : ?>
            <div class="services-items">
                <?php while (have_rows('services')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $service_title = get_sub_field('service_title');
                    $service_link = get_sub_field('service_link');
                    ?>
                    <a href="<?php echo $service_link ? esc_url($service_link['url']) : '#'; ?>"
                       class="services-item"
                        <?php echo ($service_link && $service_link['target']) ? 'target="' . esc_attr($service_link['target']) . '"' : ''; ?>>
                        <div class="services-icon">
                            <?php if ($icon) : ?>
                                <img src="<?php echo esc_url($icon['url']); ?>"
                                     alt="<?php echo esc_attr($icon['alt']); ?>">
                            <?php endif; ?>
                            <?php if ($service_title) : ?>
                                <p><?php echo wp_kses_post($service_title); ?></p>
                            <?php endif; ?>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="8" viewBox="0 0 33 8" fill="none">
                            <path d="M32.3536 4.35355C32.5488 4.15829 32.5488 3.84171 32.3536 3.64645L29.1716 0.464466C28.9763 0.269204 28.6597 0.269204 28.4645 0.464466C28.2692 0.659728 28.2692 0.976311 28.4645 1.17157L31.2929 4L28.4645 6.82843C28.2692 7.02369 28.2692 7.34027 28.4645 7.53553C28.6597 7.7308 28.9763 7.7308 29.1716 7.53553L32.3536 4.35355ZM0 4V4.5H32V4V3.5H0V4Z" fill="#434341"/>
                        </svg>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
