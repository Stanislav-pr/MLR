<?php

$title = get_sub_field('title');
$content = get_sub_field('content');
$services = get_sub_field('services');
$info_text = get_sub_field('info_text');
$form_title = get_sub_field('form_title');
$form_id = get_sub_field('form_id');

?>

<section class="coworking-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section title-two-row"><span class="line line-1"></span><div class="line-text"><?= $title;?></div><span class="line line-2"></span></h2>
        <?php endif; ?>
        <?php if ($content) : ?>
            <div class="info-wrap">
                <div class="info-text">
                    <?= $content;?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($services) : ?>
            <div class="services-items">
                <?php foreach ($services as $service) : ?>
                    <a href="<?=get_permalink($service['link']); ?>" class="services-item">
                        <div class="services-icon">
                            <img src="<?= $service['icon']['url'];?>" alt="<?= $service['icon']['alt'];?>">
                            <p><?= $service['name'];?></p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="8" viewBox="0 0 33 8" fill="none">
                            <path d="M32.3536 4.35355C32.5488 4.15829 32.5488 3.84171 32.3536 3.64645L29.1716 0.464466C28.9763 0.269204 28.6597 0.269204 28.4645 0.464466C28.2692 0.659728 28.2692 0.976311 28.4645 1.17157L31.2929 4L28.4645 6.82843C28.2692 7.02369 28.2692 7.34027 28.4645 7.53553C28.6597 7.7308 28.9763 7.7308 29.1716 7.53553L32.3536 4.35355ZM0 4V4.5H32V4V3.5H0V4Z" fill="#434341"/>
                        </svg>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($info_text) : ?>
            <div class="info-wrap">
                <div class="info-text">
                    <?= $info_text;?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($form_id): ?>
            <div class="form-wrap">
                <?php if ($form_title): ?>
                    <h2><?= esc_html($form_title); ?></h2>
                <?php endif; ?>

                <?php if ($form_id): ?>
                    <?= do_shortcode('[contact-form-7 id="'.$form_id.'"]'); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
