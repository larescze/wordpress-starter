<?php
// Theme functions

require_once locate_template('/functions/customizer.php');
require_once locate_template('/functions/widgets.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Exclude WordPress administration
if (!is_admin()) {
    // Make sure the path is correct
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.min.css',
        array(),
        null,
        'all'
    );

    // Make sure the path is correct
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        null,
        true
    );

    function theme_enqueue_style()
    {
        wp_enqueue_style('main-style', get_stylesheet_uri());
    }

    function theme_enqueue_scripts()
    {
        wp_enqueue_style('main-js', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_enqueue_style', 'theme_enqueue_scripts');
}
