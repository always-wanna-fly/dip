<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');
add_filter('document_title_separator', 'my_sep');

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
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_thumb', 1300, 500, true );

}

function register_my_widgets(){
    register_sidebar(array(
       'name'=>'Left Sidebar',
       'id'=>'left_sidebar',
       'description'=>'Сайдбар для блога',
        'before_widget'=>'<div class="widget %2$s">',
        'after_widget'=>"</div>\n",
        'before_title'=>'<h5 class="widgettitle">',
        'after_title'=>"</h5>\n"
    ));
}
function my_sep($sep){
     $sep = ' | ';
     return $sep;
}