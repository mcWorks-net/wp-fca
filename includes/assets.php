<?php

// Load CSS & JS etc.

function fca_assets() {
    wp_enqueue_style('fca-style', get_template_directory_uri() . '/dist/css/main.min.css', microtime());
    // wp_enqueue_style('tmBlog-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('fca-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', microtime());
    wp_enqueue_script('fca','https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js',  true);
    wp_enqueue_script('fbs_script', get_template_directory_uri() . '/js/script.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'fca_assets');