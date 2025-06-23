<?php

get_header();

$title = get_field('title');
$price = get_field('price');
$note = get_field('note');

$title_cost = get_field('title_costs', 'options');
$left_content_title = get_field('left_content_title', 'options');
$right_content_title = get_field('right_content_title', 'options');
$left_list = get_field('left_list', 'options');
$right_list = get_field('right_list', 'options');
$default_button = get_field('default_button', 'options');
$title_urn = get_field('title_urn', 'options');
$text_urn = get_field('text_urn', 'options');
$gallery_urn = get_field('gallery_urn', 'options');
$title_farewell = get_field('title_farewell', 'options');
$text_farewell = get_field('text_farewell', 'options');

?>

    <section class="cremation-hero">
        <div class="container">
            <?php if ($title): ?>
                <h1 class="title-page"><?= $title ?></h1>
            <?php endif; ?>
            <div class="cremation-single-content">
                <?php if($title_cost): ?>
                    <h2 class="title-section one-line"><span class="line-text"><?= $title_cost;?></span><span class="line line-2"></span></h2>
                <?php endif; ?>
                <div class="cremation-single-lists">
                    <div class="cremation-single-list cremation-single-lists-left">
                        <?php if($left_content_title): ?>
                            <div class="cremation-title-list"><?= $left_content_title;?></div>
                        <?php endif; ?>
                        <?= $left_list; ?>
                    </div>
                    <div class="cremation-single-list cremation-single-lists-right">
                        <?php if($right_content_title): ?>
                            <div class="cremation-title-list"><?= $right_content_title;?></div>
                        <?php endif; ?>
                        <?= $right_list; ?>
                    </div>
                </div>
                <div class="cremation-costs">
                    <div class="costs-value">
                        <?php if ($price): ?>
                            <p class="value-cost"><?= $price ?></p>
                        <?php endif; ?>
                        <?php if($note): ?>
                            <p class="costs-note-mobile"><?= $note ?></p>
                        <?php endif; ?>
                        <?php if ($default_button): ?>
                            <a href="<?= $default_button['url'] ?>" class="btn-default" target="<?= $default_button['target'] ?>"><?= $default_button['title'] ?></a>
                        <?php endif; ?>
                    </div>
                    <?php if ($note): ?>
                        <div class="costs-note">
                            <p><?= $note ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="urn-section">
        <div class="container">
            <?php if($title_urn): ?>
                <h2 class="title-section one-line"><span class="line-text"><?= $title_urn;?></span><span class="line line-2"></span></h2>
            <?php endif; ?>
            <?php if($text_urn): ?>
                <div class="urn-content">
                    <?= $text_urn;?>
                </div>
            <?php endif; ?>
        </div>
        <?php if($gallery_urn): ?>
            <div class="urn-slider urn-products">
                <div class="swiper-button-prev" data-slider-button="prev-2"></div>
                <div class="container">
                    <div class="swiper swiper-product" data-slider="2">
                        <div class="swiper-wrapper">
                            <?php foreach( $gallery_urn as $im ):?>
                                <div class="swiper-slide">
                                    <div class="urn-product">
                                        <a href="<?= $im['url'];?>" data-fancybox="gallery" class="fancybox">
                                            <img src="<?= $im['sizes']['medium'];?>" alt="<?= $im['alt'];?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="swiper-button-next" data-slider-button="next-2"></div>
            </div>
        <?php endif; ?>
    </section>
    <section class="farewell-section">
        <div class="container">
            <?php if($title_farewell): ?>
                <h2 class="title-section one-line"><span class="line-text"><?= $title_farewell;?></span><span class="line line-2"></span></h2>
            <?php endif; ?>
            <?php if($text_farewell): ?>
                <div class="farewell-content">
                    <?= $text_farewell;?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer();
