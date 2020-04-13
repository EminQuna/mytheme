<?php

function load_stylesheets()

{

wp_register_style('boostrap', get_template_directory_uri() . '/boostrap.min.css', 1.1, false, 'all');
wp_enqueue_style('boostrap');

wp_register_style('style', get_template_directory_uri() . '/style.css',  1.1, false, 'all');
wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');



add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
    );


function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');