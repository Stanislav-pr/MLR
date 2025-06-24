<?php

$title = get_sub_field('title_page');
$title_text = get_sub_field('title_text');
$button = get_sub_field('button');
$text = get_sub_field('text');
$image = get_sub_field('image');
$top = get_sub_field('top_position_image');

?>

<section class="page-hero">
    <div class="container">
        <?php if ($title): ?>
            <h1 class="title-page"><?= $title ?></h1>
        <?php endif; ?>
        <div class="cremation-hero-content">
            <?php if ($image): ?>
                <div class="cremation-hero-img<?= $top?' top-img':''; ?>">
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                </div>
            <?php endif; ?>
            <div class="cremation-hero-text">
                <?php if ($title_text): ?>
                    <h3><?= $title_text ?></h3>
                <?php endif; ?>
                <?php if ($text): ?>
                    <div class="cremation-text"><?= $text ?></div>
                <?php endif; ?>
                <?php if ($button): ?>
                    <a href="<?= $button['url'] ?>" class="btn-default" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
