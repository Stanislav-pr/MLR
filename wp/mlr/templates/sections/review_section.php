<?php

$title = get_sub_field('title');

?>

<section class="review-section">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="title-section">
                <span class="line line-1"></span>
                <span class="line-text"><?= $title; ?></span>
                <span class="line line-2"></span>
            </h2>
        <?php endif; ?>
        <div class="reviews">
            <div class="swiper-button-prev"></div>
            <div class="container">
                <div class="swiper swiper-product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-sub-header">
                                <div class="review-stars">
                                    <img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/img/star-half.svg" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/img/star-empty.svg" alt="">
                                </div>
                                <div class="review-link">
                                    <a href="#" target="_blank">facebook</a>
                                </div>
                            </div>
                            <div class="review-header">
                                <div class="review-photo">
                                    <img src="<?= get_template_directory_uri(); ?>/img/review-1.png" alt="">
                                </div>
                                <div class="review-name">
                                    Ірина Сущенко
                                </div>
                            </div>
                            <div class="review-text">
                                Мій тато помер у Німеччині, і я була в розпачі, не знаючи, з чого почати. Зателефонувала в цю компанію — і все організували дуже швидко: зібрали документи, перевезли тіло до Львова, допомогли з митницею. Дуже людяне ставлення — жодної холодної формальності. Навіть домовину допомогли підібрати гідну. Дякую, що тато зміг знайти вічний спокій на рідній землі.
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
