<?php

get_header();

if(get_the_content()) {?>

    <section class="page-content">
        <div class="container">
            <h1><?= get_the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>

<?php }else {

    get_template_part('templates/flexible');

}

get_footer();