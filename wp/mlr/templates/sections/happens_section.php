<?php

$title = get_sub_field('title');
$text = get_sub_field('text');

?>

<section class="happened-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section one-line"><span class="line-text"><?= $title; ?></span><span class="line line-2"></span></h2>
        <?php endif; ?>
        <?php if ($text) : ?>
            <div class="happened-content">
                <?= $text; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
