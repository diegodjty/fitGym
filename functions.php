<?php

function fitGym_menus(){
    register_nav_menus( array(
        'main-menu' => __('Main Menu','fitGym'),
    ));
};

add_action('init','fitGym_menus');