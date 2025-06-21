<?php

$title = get_sub_field('title');
$content = get_sub_field('content');
$note = get_sub_field('note');

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
    </div>
</section>
