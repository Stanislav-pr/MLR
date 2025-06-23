<?php

$default = get_sub_field('default');

if ($default){
    $title_urn = get_field('title_urn', 'options');
    $text_urn = get_field('text_urn', 'options');
    $gallery_urn = get_field('gallery_urn', 'options');
}else{
    $title_urn = get_sub_field('title');
    $text_urn = get_sub_field('text');
    $gallery_urn = get_sub_field('gallery');
}

?>

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
