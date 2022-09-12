<?php
function add_files()
{
  // main.js
  wp_enqueue_script('jq', get_theme_file_uri('/js/jquery-3.6.0.min.js'), array('jquery'));
  wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), 'jquery', '1.0.0', true);
  //リセットcss
  wp_enqueue_style('reset-css', get_theme_file_uri('/scss/foundation/reset'), array(), '1.4.0');
  //メインのcssファイル
  wp_enqueue_style('style-css', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_files', 'readScript');

add_theme_support( 'menus' );
?>