<?php

$title = get_sub_field('title');
$intro_text = get_sub_field('intro_text');
$button = get_sub_field('button');
$paragraphs = get_sub_field('variables');
$form_title = get_sub_field('form_title');
$form_id = get_sub_field('form_id');

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

        <?php if (have_rows('variables')): ?>
            <div class="variables-wrap">
                <?php
                $buffer = [];
                while (have_rows('variables')): the_row();
                    $buffer[] = get_sub_field('items');
                    if (count($buffer) === 2) {
                        ?>
                        <div class="variable-row">
                            <div class="variable-column variable-left">
                                <div class="variable-item">
                                    <p><?= esc_html($buffer[0]); ?></p>
                                </div>
                            </div>
                            <div class="variable-column variable-right">
                                <div class="variable-item">
                                    <p><?= esc_html($buffer[1]); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $buffer = [];
                    }
                endwhile;

                if (count($buffer) === 1):
                    ?>
                    <div class="variable-row">
                        <div class="variable-column variable-left">
                            <div class="variable-item">
                                <p><?= esc_html($buffer[0]); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
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

