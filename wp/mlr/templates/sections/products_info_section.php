<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$notes = get_sub_field('notes');
$specifications = get_sub_field('specifications');
$products = get_sub_field('products');
$ind = get_row_index();

?>

<section class="products-section">
    <div class="container">
        <div class="products-wrap">
            <?php if ($title) : ?>
                <h2 class="title-section"><span class="line line-1"></span><span class="line-text"><?= $title; ?></span><span class="line line-2"></span></h2>
            <?php endif; ?>
            <?php if ($text) : ?>
                <div class="products-text">
                    <?= $text; ?>
                </div>
            <?php endif; ?>
            <div class="product-table">
                <div class="product-specs">
                    <div class="specs-row specs-header specs-header-first">
                        <div class="specs-label"></div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="group-title">ЧОРНИЙ</div>
                            </div>
                            <div class="specs-group">
                                <div class="group-title">БІЛИЙ</div>
                            </div>
                        </div>
                    </div>
                    <div class="specs-row specs-header">
                        <div class="specs-label"></div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell group-title">L</div>
                                <div class="specs-cell group-title">XL</div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell group-title">L</div>
                                <div class="specs-cell group-title">XL</div>
                            </div>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label">Вантажопідйомність</div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell">120 кг</div>
                                <div class="specs-cell">140 кг</div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell">140 кг</div>
                                <div class="specs-cell">160 кг</div>
                            </div>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label">Товщина</div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell">160 μm</div>
                                <div class="specs-cell">200 μm</div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell">160 μm</div>
                                <div class="specs-cell">200 μm</div>
                            </div>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label">Розміри</div>
                        <div class="specs-value">
                            220 × 90 см
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label">Розміри Фальц</div>
                        <div class="specs-value">
                            10–15 см
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label">Технічний документ</div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell"><a href="#">деталі</a></div>
                                <div class="specs-cell"><a href="#">деталі</a></div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell"><a href="#">деталі</a></div>
                                <div class="specs-cell"><a href="#">деталі</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-specs-mobile">
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label">ЧОРНИЙ</div>
                            <div class="specs-item-value">L</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Вантажопідйомність</div>
                            <div class="specs-item-value">120 кг</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Товщина</div>
                            <div class="specs-item-value">160 μm</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри</div>
                            <div class="specs-item-value">220 × 90 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри Фальц</div>
                            <div class="specs-item-value">10–15 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Технічний документ</div>
                            <div class="specs-item-value"><a href="#">деталі</a></div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label">ЧОРНИЙ</div>
                            <div class="specs-item-value">XL</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Вантажопідйомність</div>
                            <div class="specs-item-value">140 кг</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Товщина</div>
                            <div class="specs-item-value">200 μm</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри</div>
                            <div class="specs-item-value">220 × 90 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри Фальц</div>
                            <div class="specs-item-value">10–15 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Технічний документ</div>
                            <div class="specs-item-value"><a href="#">деталі</a></div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label">БІЛИЙ</div>
                            <div class="specs-item-value">L</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Вантажопідйомність</div>
                            <div class="specs-item-value">140 кг</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Товщина</div>
                            <div class="specs-item-value">160 μm</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри</div>
                            <div class="specs-item-value">220 × 90 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри Фальц</div>
                            <div class="specs-item-value">10–15 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Технічний документ</div>
                            <div class="specs-item-value"><a href="#">деталі</a></div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label">БІЛИЙ</div>
                            <div class="specs-item-value">XL</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Вантажопідйомність</div>
                            <div class="specs-item-value">160 кг</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Товщина</div>
                            <div class="specs-item-value">200 μm</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри</div>
                            <div class="specs-item-value">220 × 90 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Розміри Фальц</div>
                            <div class="specs-item-value">10–15 см</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label">Технічний документ</div>
                            <div class="specs-item-value"><a href="#">деталі</a></div>
                        </div>
                    </div>
                </div>
                <?php if($notes): ?>
                    <div class="product-notes">
                        <?= $notes; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
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
