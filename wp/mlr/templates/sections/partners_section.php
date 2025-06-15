<?php

$title = get_sub_field('title');

?>

<section class="partners-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>
    </div>

    <?php if (have_rows('partner_logos')) : ?>
        <div class="marquee-wrapper">
            <div class="marquee">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="marquee-content">
                        <?php while (have_rows('partner_logos')) : the_row();

                            $logo = get_sub_field('logo');

                            if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>"
                                     alt="<?php echo esc_attr($logo['alt']); ?>">
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
