<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');

function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function scripts_theme(){
    wp_enqueue_script('init', get_template_directory_uri() .'/assets/js/init.js');
    wp_enqueue_script('flexslider', get_template_directory_uri() .'/assets/js/jquery.flexslider.js');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() .'/assets/js/doubletaptogo.js');
}
function theme_register_nav_menu(){
    register_nav_menu('top', 'Верхнє меню');
    register_nav_menu('bottom', 'Нижнє меню');
    register_nav_menu('social', 'Наші соцмережі');

}