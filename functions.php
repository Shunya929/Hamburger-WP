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

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function register_my_menus() { 
    register_nav_menus( array( 
      'sidemenu' => 'サイドバー',
      'footermenu' => 'フッター',
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

  
function my_posts_control($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_search()) {
    $query->set('posts_per_page', '5');
    return;
  }
  if ($query->is_archive()) {
    $query->set('posts_per_page', '3');
    return;
  }
}
add_action('pre_get_posts', 'my_posts_control');
  
