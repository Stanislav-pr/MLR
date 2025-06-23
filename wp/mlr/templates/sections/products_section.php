<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$products = get_sub_field('products');
$ind = get_row_index();


?>

<section class="urn-product-section">
    <div class="container">
        <?php if($title): ?>
            <h2 class="title-section one-line"><span class="line-text"><?= $title;?></span><span class="line line-2"></span></h2>
        <?php endif; ?>
        <?php if($text): ?>
            <div class="urn-product-text">
                <?= $text;?>
            </div>
        <?php endif; ?>
    </div>
    <?php if($products): ?>
        <div class="urn-slider urn-products">
            <div class="swiper-button-prev" data-slider-button="prev-<?= $ind;?>"></div>
            <div class="container">
                <div class="swiper swiper-product" data-slider="<?= $ind;?>">
                    <div class="swiper-wrapper">
                        <?php foreach( $products as $im ):?>
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
            <div class="swiper-button-next" data-slider-button="next-<?= $ind;?>"></div>
        </div>
    <?php endif; ?>
</section>
