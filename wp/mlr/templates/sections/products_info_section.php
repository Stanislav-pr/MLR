<?php

$ind = get_row_index();

$title = get_sub_field('title');
$text = get_sub_field('text');
$notes = get_sub_field('notes');
$products = get_sub_field('products');

$specifications = get_sub_field('specifications');
$bl = $specifications['black_l'];
$bxl = $specifications['black_xl'];
$wl = $specifications['white_l'];
$wxl = $specifications['white_xl'];

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
                                <div class="group-title"><?= __('ЧОРНИЙ', 'mlr');?></div>
                            </div>
                            <div class="specs-group">
                                <div class="group-title"><?= __('БІЛИЙ', 'mlr');?></div>
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
                        <div class="specs-label"><?= __('Вантажопідйомність', 'mlr');?></div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell"><?= $bl['wpd']?></div>
                                <div class="specs-cell"><?= $bxl['wpd']?></div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell"><?= $wl['wpd']?></div>
                                <div class="specs-cell"><?= $wxl['wpd']?></div>
                            </div>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label"><?= __('Товщина', 'mlr');?></div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell"><?= $bl['tov']?></div>
                                <div class="specs-cell"><?= $bxl['tov']?></div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell"><?= $wl['tov']?></div>
                                <div class="specs-cell"><?= $wxl['tov']?></div>
                            </div>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label"><?= __('Розміри', 'mlr');?></div>
                        <div class="specs-value">
                            <?= $bl['size']?>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label"><?= __('Розміри Фальц', 'mlr');?></div>
                        <div class="specs-value">
                            <?= $bl['sizef']?>
                        </div>
                    </div>

                    <div class="specs-row">
                        <div class="specs-label"><?= __('Технічний документ', 'mlr');?></div>
                        <div class="specs-value">
                            <div class="specs-group">
                                <div class="specs-cell">
                                    <?php if ($bl['td']): ?>
                                        <a href="<?= $bl['td']['url'] ?>" target="<?= $bl['td']['target'] ?>"><?= $bl['td']['title'] ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="specs-cell">
                                    <?php if ($bxl['td']): ?>
                                        <a href="<?= $bxl['td']['url'] ?>" target="<?=
                                        $bxl['td']['target'] ?>"><?= $bxl['td']['title'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="specs-group">
                                <div class="specs-cell">
                                    <?php if ($wl['td']): ?>
                                        <a href="<?= $wl['td']['url'] ?>" target="<?= $wl['td']['target'] ?>"><?= $wl['td']['title'] ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="specs-cell">
                                    <?php if ($wxl['td']): ?>
                                        <a href="<?= $wxl['td']['url'] ?>" target="<?=
                                        $wxl['td']['target'] ?>"><?= $wxl['td']['title'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-specs-mobile">
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label"><?= __('ЧОРНИЙ', 'mlr');?></div>
                            <div class="specs-item-value">L</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Вантажопідйомність', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bl['wpd']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Товщина', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bl['tov']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bl['size']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри Фальц', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bl['sizef']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Технічний документ', 'mlr');?></div>
                            <div class="specs-item-value">
                                <?php if ($bl['td']): ?>
                                    <a href="<?= $bl['td']['url'] ?>" target="<?= $bl['td']['target'] ?>"><?= $bl['td']['title'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label"><?= __('ЧОРНИЙ', 'mlr');?></div>
                            <div class="specs-item-value">XL</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Вантажопідйомність', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bxl['wpd']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Товщина', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bxl['tov']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bxl['size']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри Фальц', 'mlr');?></div>
                            <div class="specs-item-value"><?= $bxl['sizef']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Технічний документ', 'mlr');?></div>
                            <div class="specs-item-value">
                                <?php if ($bxl['td']): ?>
                                    <a href="<?= $bxl['td']['url'] ?>" target="<?= $bxl['td']['target'] ?>"><?= $bxl['td']['title'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label"><?= __('БІЛИЙ', 'mlr');?></div>
                            <div class="specs-item-value">L</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Вантажопідйомність', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wl['wpd']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Товщина', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wl['tov']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wl['size']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри Фальц', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wl['sizef']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Технічний документ', 'mlr');?></div>
                            <div class="specs-item-value">
                                <?php if ($wl['td']): ?>
                                    <a href="<?= $wl['td']['url'] ?>" target="<?= $wl['td']['target'] ?>"><?=
                                        $wl['td']['title'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="specs-item">
                        <div class="specs-item-row specs-item-head">
                            <div class="specs-item-label"><?= __('БІЛИЙ', 'mlr');?></div>
                            <div class="specs-item-value">XL</div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Вантажопідйомність', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wxl['wpd']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Товщина', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wxl['tov']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wxl['size']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Розміри Фальц', 'mlr');?></div>
                            <div class="specs-item-value"><?= $wxl['sizef']?></div>
                        </div>
                        <div class="specs-item-row">
                            <div class="specs-item-label"><?= __('Технічний документ', 'mlr');?></div>
                            <div class="specs-item-value">
                                <?php if ($wxl['td']): ?>
                                    <a href="<?= $wxl['td']['url'] ?>" target="<?= $wxl['td']['target'] ?>"><?=
                                        $wxl['td']['title'] ?></a>
                                <?php endif; ?>
                            </div>
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
