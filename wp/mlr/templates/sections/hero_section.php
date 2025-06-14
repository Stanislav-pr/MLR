<?php

$title = get_sub_field('title');
$mobile_banner = get_sub_field('mobile_banner');
$banner = get_sub_field('banner_image');
$cta_button = get_sub_field('cta_button');

?>

<section class="hero" style="background-image: url('<?php echo esc_url($banner['url']); ?>')">
    <div class="container">
        <?php if ($title) : ?>
            <h1><?= $title; ?></h1>
        <?php endif; ?>
    </div>

    <?php if ($mobile_banner) : ?>
        <div class="mob-banner" style="background-image: url('<?php echo esc_url($mobile_banner['url']); ?>')"></div>
    <?php endif; ?>

    <div class="container">
        <?php if (have_rows('services_list')) : ?>
            <ul class="default-list hero-list">
                <?php while (have_rows('services_list')) :the_row();
                    $service = get_sub_field('service_item');?>
                    <?php if ($service) : ?>
                        <li><?php echo wp_kses_post($service); ?></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if ($cta_button) : ?>
            <a href="<?php echo esc_url($cta_button['url']); ?>"
               class="btn-default"
                <?php echo $cta_button['target'] ? 'target="' . esc_attr($cta_button['target']) . '"' : ''; ?>>
                <?php echo esc_html($cta_button['title']); ?>
            </a>
        <?php endif; ?>
    </div>
</section>

