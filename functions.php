<?php

function fitGym_setup(){
    // IMG
    add_theme_support('post-thumbnails');

    // Titles for SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme','fitGym_setup');

function fitGym_menus(){
    register_nav_menus( array(
        'main-menu' => __('Main Menu','fitGym'),
    ));
};

add_action('init','fitGym_menus');

function fitGym_scripts_styles(){
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(),'8.0.1');
    wp_enqueue_style('style',get_stylesheet_uri(), array('normalize'),'1.0.0');
}

add_action('wp_enqueue_scripts','fitGym_scripts_styles');