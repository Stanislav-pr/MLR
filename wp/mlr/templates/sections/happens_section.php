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
                <?php foreach( $countries as $post): setup_postdata($post); ?>

                    <li><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>

                <?php endforeach;

                wp_reset_postdata(); ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
