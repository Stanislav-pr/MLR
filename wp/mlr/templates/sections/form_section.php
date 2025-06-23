<?php

$title = get_sub_field('title');
$form_id = get_sub_field('form_id');

?>

<section class="form-section">
    <div class="container">
        <div class="form-wrap">
            <?php if ($title) : ?>
                <h2><?= $title; ?></h2>
            <?php endif; ?>
            <?php if ($form_id) : ?>
                <?= do_shortcode('[contact-form-7 id="'.$form_id.'"]'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
