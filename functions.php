<?php

// Includes
require get_template_directory().'/includes/widgets.php';
require get_template_directory().'/includes/queries.php';

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
    // CSS files
    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(),'8.0.1');
    wp_enqueue_style('style',get_stylesheet_uri(), array('normalize'),'1.0.0');
    wp_enqueue_style('lightboxcss',get_template_directory_uri().'/css/lightbox.min.css',array(''),'2.11.3');
    wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',array(),'8.4.7');

    // JS files
    wp_enqueue_script('lightbox.js',get_template_directory_uri().'/js/lightbox.min.js',array('jquery'),'2.11.3',true);
    wp_enqueue_script('swiper-js','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',array(),'8.4.7',true);
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('swiper-js'),true);
}

add_action('wp_enqueue_scripts','fitGym_scripts_styles');

function fitGym_widgets(){
    register_sidebar(array(
        'name'=> 'Sidebar 1',
        'id'=> 'sidebar_1',
        'before_widget'=> '<div class="widget">',
        'after_widget'=> '</div>',
        'before_title'=>'<h3 class="text-center primary-text">',
        'after_title'=>'</h3>'
    ));
}
add_action('widgets_init','fitGym_widgets');

// Create Shortcode
function fitGym_location_shotcode(){
    ?>
        <div class="map">
            <?php 
                 if(is_page('contact')){
                    the_field('location');
                }
            ?>
        </div>
        <h2 class="text-center primary-text">Contact Form</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="107" title="Contact form 1"]');
}
add_shortcode('fitGym_location','fitGym_location_shotcode');

/** Dynamic images as background */
function fitGym_hero_image(){
    // Get id of the page
    $front_id = get_option('page_on_front');
    // get the image
    $image_id = get_field('hero_image',$front_id);
    // Get image route
    $image = wp_get_attachment_image_src($image_id, 'full')[0];
    // Create Css

    // Inyect Css
}
add_action('init','fitGym_hero_image');