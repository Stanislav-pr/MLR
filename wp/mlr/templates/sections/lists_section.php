<?php

$title = get_sub_field('title');
$content = get_sub_field('content');
$note = get_sub_field('note');
$note2 = get_sub_field('note_2');
$delivery_costs = get_sub_field('delivery_costs');

$default_button = get_field('default_button', 'options');

?>

<section class="lists-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section one-line"><span class="line-text"><?= $title;?></span><span class="line line-2"></span></h2>
        <?php endif; ?>
        <?php if ($content) : ?>
            <div class="lists-content">
                <?= $content; ?>
            </div>
        <?php endif; ?>
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
        <?php if ($delivery_costs) : ?>
            <div class="cremation-costs">
                <div class="costs-value">
                    <p class="value-cost"><?= $delivery_costs; ?></p>
                    <?php if ($default_button): ?>
                        <a href="<?= $default_button['url'] ?>" class="btn-default" target="<?= $default_button['target'] ?>"><?= $default_button['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>
