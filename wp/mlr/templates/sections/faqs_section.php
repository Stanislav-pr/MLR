<?php

$title = get_sub_field('title');
$intro_text = get_sub_field('intro_text');
$outro_text = get_sub_field('outro_text');
$reviews = get_sub_field('faq_items');

?>

<section class="faqs-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section one-line">
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <?php if ($intro_text) : ?>
            <div class="faqs-content">
                <?php echo wp_kses_post($intro_text); ?>
            </div>
        <?php endif; ?>

        <?php if( $reviews ): ?>

            <div class="faqs-accordion">

                <?php foreach( $reviews as $post): setup_postdata($post); ?>

                    <div class="faqs-item">
                        <div class="faqs-item-title">
                            <?= get_the_title(); ?>
                        </div>
                        <div class="faqs-item-content" style="display: none;">
                            <?= get_the_content(); ?>
                        </div>
                    </div>

                <?php endforeach; wp_reset_postdata(); ?>

            </div>

        <?php endif; ?>

        <?php if ($outro_text) : ?>
            <div class="faqs-content">
                <?php echo wp_kses_post($outro_text); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
