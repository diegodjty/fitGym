<?php

function fitGym_menus(){
    register_nav_menus( array(
        'main-menu' => __('Main Menu','fitGym'),
    ));
};

add_action('init','fitGym_menus');

function fitGym_scripts_styles(){
    wp_enqueue_style('style',get_stylesheet_uri(), array(),'1.0.0');
}

add_action('wp_enqueue_scripts','fitGym_scripts_styles');