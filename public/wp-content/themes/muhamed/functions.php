<?php

function muhamed_theme_scripts(){
    wp_enqueue_style('muhamed-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);

    if ( 'event' === get_post_type() ) {
        wp_enqueue_style('muhamed-event-css', get_template_directory_uri().'/css/event.css');
        wp_enqueue_script('muhamed-event-js', get_template_directory_uri().'/js/event.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'muhamed_theme_scripts');