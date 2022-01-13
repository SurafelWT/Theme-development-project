<?php

function NNSW_Theme_load_css(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css' , array(), false, 'all');
    wp_enqueue_style('main');


}
add_action('wp_enqueue_script' , 'NNSW_Theme_load_css');


function NNSW_Theme_load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array('jquery'), false, true);
    wp_enqueue_script('bootstrap');


}
add_action('wp_enqueue_script' , 'NNSW_Theme_load_js');

add_theme_support('menus');


register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
    );
    ?>