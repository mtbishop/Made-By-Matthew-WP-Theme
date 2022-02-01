<?php

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
    wp_enqueue_style('madebymatthew-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'madebymatthew_register_styles');

function madebymatthew_register_scripts()
{
    wp_enqueue_script('madebymatthew-main', get_template_directory() . '/assets/js/main.js', array(), '0.1', true);
}

add_action('wp_enqueue_scripts', 'madebymatthew_register_scripts');
