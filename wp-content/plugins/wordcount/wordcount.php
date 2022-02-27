<?php
/**
 * @package wordcount_yearul
 * @version 1.0.0
 */
/*
Plugin Name: Word Count IDB
Plugin URI: https://wordpress.org/topstory
Description: Post Word Count.
Version: 4.2.1
Author: Yearul Islam
Author URI: https://automattic.com/wordpress-plugins/yearul
License: GPLv2 or later
Text Domain: wordcount_yearul
Domain Path: /language/
*/

// function wordcount_activitin_hook(){
// }
// register_activation_hook(__File__, 'wordcount_activitin_hook');
// function wordcount_deactivitin_hook(){
// }
// register_deactivation_hook(__File__, 'wordcount_deactivitin_hook');

function wordcount_textdomain(){
    load_plugin_textdomain('wordcount_yearul', false, dirname(__File__)."/language/");
}
add_action('plugins_loaded', 'wordcount_textdomain');

function wordcount_words($content){
    $strippe_content = strip_tags($content);
    $wordlnt = str_word_count($strippe_content);
    $label = __('total number of words', 'wordcount');
      $label = apply_filters('wordcount_user_label', $label);
      $tag = apply_filters('wordcount_tag', 'h2');
    $content .= sprintf('<%s>%s: %s</%s>', $tag, $label, $wordlnt, $tag);
    return $content; 
}
add_filter('the_content', "wordcount_words");