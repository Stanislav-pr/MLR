<?php

$title = get_sub_field('title');
$reviews = get_sub_field('reviews');

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
    </div>
        <?php if( $reviews ): ?>

            <div class="reviews">
                <div class="review-button-prev"></div>
                <div class="container">
                    <div class="swiper swiper-reviews">
                        <div class="swiper-wrapper">

                            <?php foreach( $reviews as $post): setup_postdata($post);

                                $rating = get_field('rating');
                                $title = preg_replace('/\s/', '<br>', get_the_title(), 1);
                                $url = get_field('link');

                                ?>

                                <div class="swiper-slide review-item">
                                    <div class="review-sub-header">
                                        <div class="review-stars">
                                            <?= render_stars($rating);?>
                                        </div>
                                        <div class="review-link">
                                            <?php if ($url) : ?>
                                                <a href="<?= $url; ?>" target="_blank"><img src="<?=
                                                    get_template_directory_uri(); ?>/img/fb.svg" alt="fb"></a>
                                            <?php else : ?>
                                                <img src="<?= get_template_directory_uri(); ?>/img/fb.svg" alt="fb">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="review-header">
                                        <div class="review-photo">
                                            <img src="<?php the_post_thumbnail_url();?>" alt="<?= get_the_title(); ?>">
                                        </div>
                                        <div class="review-name">
                                            <?= $title;?>
                                        </div>
                                    </div>
                                    <div class="review-text">
                                        <?= get_the_content(); ?>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="review-button-next"></div>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

</section>
