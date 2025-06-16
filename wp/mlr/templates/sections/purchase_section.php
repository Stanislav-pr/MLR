<?php

$title = get_sub_field('title');
$intro_text = get_sub_field('intro_text');
$button = get_sub_field('button');
$rows = get_sub_field('variable_rows');
$cta_title = get_sub_field('cta_title');
$form_shortcode = get_sub_field('cta_form_shortcode');

?>

<section class="moved-section">
    <div class="container">
        <?php if ($title): ?>
            <h1><?= esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if ($intro_text || $button): ?>
            <div class="moved-info">
                <?php if ($intro_text): ?>
                    <?= wp_kses_post($intro_text); ?>
                <?php endif; ?>

                <?php if ($button): ?>
                    <a href="<?= esc_url($button['url']); ?>" class="btn-default" <?php if ($button['target']) echo 'target="' . esc_att($button['target']) . '"'; ?>>
                        <?= esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

                    <?php if (!empty($rows)): ?>
                        <div class="variables-wrap">
                            <?php foreach ($rows as $row): ?>
                                <div class="variable-row">
                                    <div class="variable-column variable-left">
                                        <div class="variable-item">
                                            <?= wp_kses_post($row['left_column']); ?>
                                        </div>
                                    </div>
                                    <div class="variable-column variable-right">
                                        <div class="variable-item">
                                            <?= wp_kses_post($row['right_column']); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($cta_title || $form_shortcode): ?>
                        <div class="form-wrap">
                            <?php if ($cta_title): ?>
                                <h2><?= esc_html($cta_title); ?></h2>
                            <?php endif; ?>

                            <?php if ($form_shortcode): ?>
                                <?= do_shortcode($form_shortcode); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

