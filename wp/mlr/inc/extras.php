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
