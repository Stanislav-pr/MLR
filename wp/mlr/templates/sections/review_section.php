<?php

$title = get_sub_field('title');

?>

<section class="review-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>
        <div class="reviews">
            <?= do_shortcode('[wprevpro_usetemplate tid="1"]'); ?>
        </div>
    </div>
</section>
