<?php

add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_styles() {
    wp_enqueue_style('fancybox', get_template_directory_uri().'/css/jquery.fancybox.min.css', array(), rand(1111, 9999));
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.min.css', array(), rand(1111, 9999));
    wp_enqueue_style('styles', get_template_directory_uri().'/css/style.css', array(), rand(1111, 9999));
    wp_enqueue_style( 'theme', get_stylesheet_uri() );

}

function add_scripts() {
    $key_map = get_field('google_map_api_key', 'options');

    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array('jquery'), false, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);

    if($key_map){
        wp_enqueue_script( 'map', 'https://maps.googleapis.com/maps/api/js?key='.$key_map.'&callback=initMap', array('jquery'), false,['in_footer' => true, 'strategy'  => 'defer',]);
    }

}