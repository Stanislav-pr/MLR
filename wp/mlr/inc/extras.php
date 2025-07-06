<?php

/* clear phone number */

function phone_clear($phone_num){
    $phone_num = preg_replace("![^0-9]+!",'',$phone_num);
    return($phone_num);
}


/* excerpt */

add_filter( 'excerpt_length', function(){
    return 27;
} );

add_filter( 'excerpt_more', function( $more ) {
    return '';
} );

add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_google_map_api_key() {

    $key_map = get_field('google_map_api_key', 'options');

    acf_update_setting( 'google_api_key', $key_map );
}
add_action( 'acf/init', 'my_acf_google_map_api_key' );


// body class

add_filter('body_class', 'my_custom_body_class');
function my_custom_body_class($classes) {

    if (is_page(350)) {
        $classes[] = 'moved';
    }

    return $classes;
}


// Stars


function render_stars($rating){
    $output = '';
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;

    $template_dir = get_template_directory_uri();

    for ($i = 0; $i < $fullStars; $i++) {
        $output .= '<img src="' . $template_dir . '/img/star.svg" alt="star">';
    }

    if ($halfStar) {
        $output .= '<img src="' . $template_dir . '/img/star-half.svg" alt="star-half">';
    }

    for ($i = 0; $i < $emptyStars; $i++) {
        $output .= '<img src="' . $template_dir . '/img/star-empty.svg" alt="star-empty">';
    }

    return $output;
}
