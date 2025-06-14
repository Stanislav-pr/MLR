<?php



?>

<section class="faqs-section">
    <div class="container">
        <?php if ($title = get_sub_field('title')) : ?>
            <h2 class="title-section one-line">
                <span class="line-text"><?php echo esc_html($title); ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <?php if ($intro_text = get_sub_field('intro_text')) : ?>
            <div class="faqs-content">
                <?php echo wp_kses_post($intro_text); ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('faq_items')) : ?>
            <div class="faqs-accordion">
                <?php while (have_rows('faq_items')) : the_row(); ?>
                    <div class="faqs-item">
                        <?php if ($question = get_sub_field('question')) : ?>
                            <div class="faqs-item-title">
                                <?php echo esc_html($question); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($answer = get_sub_field('answer')) : ?>
                            <div class="faqs-item-content" style="display: none;">
                                <?php echo wp_kses_post($answer); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ($outro_text = get_sub_field('outro_text')) : ?>
            <div class="faqs-content">
                <?php echo wp_kses_post($outro_text); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
