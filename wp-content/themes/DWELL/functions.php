<?php

function load_stylesheets()
{
        wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', 
        array(), false, 'all');

        wp_enqueue_style('bootstrap');

        wp_register_style('style', get_template_directory_uri().'/style.css', 
        array(), false, 'all');

        wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function includejquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery341.min.js', '', 1, true);

}
add_action('wp_enqueue_scripts', 'includejquery');


function load_js()
{

    wp_register_script('customjs', get_template_directory_uri().'/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

    array(

        'top-menu' => __('Top menu', 'theme'),
        'footer-menu' => __('Footer menu', 'theme'),

    )

);

add_image_size('smallest', 300, 300, true);
add_image_size('smallest', 800, 800, true);