<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
register_nav_menus(array(
    'primary-menu' => 'Primary menu',
));

function rovina_coffee_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    //add styles
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/lib/bootstrap/css/bootstrap.min.css'), array(), 'v4.0.0', 'all');
    wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.min.css'), array(), $theme_version, 'all');
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), $theme_version, 'all');
    wp_enqueue_style('fullscreenoverlay', get_theme_file_uri('/assets/lib/fullscreenoverlay/css/style1.css'), array(), $theme_version, 'all');
    if (is_home()) {
        wp_enqueue_style('onepage-scroll', get_theme_file_uri('/assets/lib/onepage-scroll/onepage-scroll.css'), array(), 'v1.3.1', 'all');
    }

    //add scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('onepage-scroll-js', get_theme_file_uri('/assets/lib/onepage-scroll/jquery.onepage-scroll.js'), array('jquery'), 'v1.3.1', false);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/lib/bootstrap/js/bootstrap.min.js'), array(), 'v4.0.0', true);
    wp_enqueue_script('classie-js', get_theme_file_uri('/assets/lib/fullscreenoverlay/js/classie.js'), array(), $theme_version, true);
    wp_enqueue_script('fullscreenoverlay-js', get_theme_file_uri('/assets/lib/fullscreenoverlay/js/demo1.js'), array(), $theme_version, true);
    wp_enqueue_script('modernizr-js', get_theme_file_uri('/assets/lib/fullscreenoverlay/js/modernizr.custom.js'), array(), $theme_version, false);

    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), $theme_version, true);
}

add_action('wp_enqueue_scripts', 'rovina_coffee_enqueue_scripts');