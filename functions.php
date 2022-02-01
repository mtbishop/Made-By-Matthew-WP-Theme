<?php

function madebymatthew_theme_support()
{

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

function madebymatthew_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Top Sidebar"
    );
    register_nav_menus($locations);
}

add_action('init', 'madebymatthew_menus');


function madebymatthew_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('madebymatthew-style', get_template_directory_uri() . "/style.css", array("madebymatthew-bootstrap"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'madebymatthew_register_styles');

function madebymatthew_register_scripts()
{
    wp_enqueue_script('madebymatthew-main', get_template_directory() . '/assets/js/index.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'madebymatthew_register_scripts');
