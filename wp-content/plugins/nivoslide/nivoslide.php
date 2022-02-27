<?php

/**
 * @package wordcount_yearul
 * @version 1.0.0
 */
/*
plugin Name: Nivo slider Plugin IDB
Plugin URI: https://wordpress.org/topstory
Description: Simple implementation of a nivo slideshow into WordPress
Version: 4.2.1
Author: Yearul Islam
Author URI: https://automattic.com/wordpress-plugins/yearul
License: GPLv2 or later
Text Domain: wordcount_yearul
Domain Path: /language/
*/


function np_init() {
    add_theme_support( 'post-thumbnails' );
    $args = array(
        'public' => true,
        'label' => 'Nivo Images',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('np_images', $args);
}
add_action('init', 'np_init');


function np_register_scripts() {
    if (!is_admin()) {
        // register
        wp_register_script('np_nivo-script', plugins_url('nivo-slider/jquery.nivo.slider.js', __FILE__), array( 'jquery' ));
        wp_register_script('np_script', plugins_url('script.js', __FILE__));
 
        // enqueue
        wp_enqueue_script('np_nivo-script');
        wp_enqueue_script('np_script');
    }
}
 
function np_register_styles() {
    // register
    wp_register_style('np_styles', plugins_url('nivo-slider/nivo-slider.css', __FILE__));
    wp_register_style('np_styles_theme', plugins_url('nivo-slider/themes/default/default.css', __FILE__));
 
    // enqueue
    wp_enqueue_style('np_styles');
    wp_enqueue_style('np_styles_theme');
}
add_action('wp_print_scripts', 'np_register_scripts');
add_action('wp_print_styles', 'np_register_styles');



add_image_size('np_widget', 180, 100, true);
add_image_size('np_function', 600, 280, true);