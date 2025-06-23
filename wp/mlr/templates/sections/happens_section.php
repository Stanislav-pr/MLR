<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$countries = get_sub_field('countries');

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
        <?php if($countries) : ?>
            <ul class="happened-list">
                <li><a href=""><img src="img/flag/ukraine.png" alt="">Україна</a></li>
                <li><a href=""><img src="img/flag/germany.png" alt="">Німеччина</a></li>
                <li><a href=""><img src="img/flag/czech.png" alt="">Чехія</a></li>
                <li><a href=""><img src="img/flag/estonia.png" alt="">Естонія</a></li>
                <li><a href=""><img src="img/flag/latvia.png" alt="">Латвія</a></li>
                <li><a href=""><img src="img/flag/lithuania.png" alt="">Литва</a></li>
                <li><a href="#"><img src="img/flag/poland.png"alt="">Польща</a></li>
                <li><a href=""><img src="img/flag/moldova.png" alt="">Молдова</a></li>
                <li><a href=""><img src="img/flag/earth.png" alt="">Інші країни</a></li>
            </ul>
        <?php endif; ?>
    </div>
</section>
