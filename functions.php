<?php
function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/bundle.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');
?>
