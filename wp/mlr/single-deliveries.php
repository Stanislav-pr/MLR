<?php

get_header();

$title = get_field('title');
$price = get_field('price');
$title_days = get_field('title_days');
$days = get_field('days');

$default_button = get_field('default_button', 'options');
$note = get_field('note', 'options');
$note2 = get_field('note_2', 'options');
$text_after_price = get_field('text_after_price', 'options');
$text_after_days = get_field('text_after_days', 'options');
$connect_text = get_field('connect_text', 'options');

?>

<section class="lists-section lists-hero">
    <div class="container">
        <?php if($title) : ?>
            <h1><?=$title; ?></h1>
        <?php endif; ?>
        <div class="lists-content">
            <?php if($price):?>
                <h4><?=$price; ?></h4>
            <?php endif; ?>

            <?= $text_after_price; ?>

            <?php if($days):?>
                <?php if($title_days) : ?>
                    <h4><?=$title_days; ?>:</h4>
                <?php endif; ?>
                <ul>
                    <?php foreach($days as $day) : ?>
                        <li><?=$day['item']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?= $text_after_days; ?>

        </div>
        <?php if ($note) : ?>
            <div class="lists-note">
                <p><b><?= $note; ?></b></p>
            </div>
        <?php endif; ?>
        <?php if ($note2) : ?>
            <div class="lists-note">
                <p><?= $note2; ?></p>
            </div>
        <?php endif; ?>

        <div class="cremation-costs">
            <div class="costs-value">
                <?php if ($connect_text) : ?>
                    <p class="value-cost"><?= $connect_text; ?></p>
                <?php endif; ?>

                <?php if ($default_button): ?>
                    <a href="<?= $default_button['url'] ?>" class="btn-default" target="<?= $default_button['target'] ?>"><?= $default_button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();