<?php

$title = get_sub_field('title_page');
$button = get_sub_field('button');
$text = get_sub_field('text');
$size = get_sub_field('size');
?>

<section class="moved-section<?= $size?' products-text':'';?>">
    <div class="container">
        <?php if ($title): ?>
            <h1><?= $title ?></h1>
        <?php endif; ?>
        <div class="moved-info">
            <?= $text;?>
            <?php if ($button): ?>
                <a href="<?= $button['url'] ?>" class="btn-default" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
