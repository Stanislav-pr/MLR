<?php



?>

<section class="choice-section">
    <div class="container">
        <?php if ($title = get_sub_field('title')) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?php echo esc_html($title); ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>

        <?php if (have_rows('choice_cards')) : ?>
            <div class="choice-wrap">
                <?php while (have_rows('choice_cards')) : the_row(); ?>
                    <div class="card-choice">
                        <?php if ($card_number = get_sub_field('card_number')) : ?>
                            <div class="choice-count"><?php echo esc_html($card_number); ?></div>
                        <?php endif; ?>
                        <?php if ($card_title = get_sub_field('card_title')) : ?>
                            <div class="card-choice-title"><?php echo esc_html($card_title); ?></div>
                        <?php endif; ?>
                        <?php if ($card_text = get_sub_field('card_text')) : ?>
                            <p><?php echo esc_html($card_text); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
