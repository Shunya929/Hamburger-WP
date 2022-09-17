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

//サイドバーにウィジェット追加
// function wpbeg_widgets_init() {
//     register_sidebar (
//         array(
//             'name'          => 'カテゴリーウィジェット',
//             'id'            => 'category_widget',
//             'description'   => 'カテゴリー用ウィジェットです',
//             'before_widget' => '<li id="%1$s" class="c-txt-itemname__sidebar">',
//             'after_widget'  => '</li>',
//             'before_title'  => '<a class="c-txt-category__sidebar"><i class="c-txt-category__sidebar" aria-hidden="true"></i>',
//             'after_title'   => "</a>\n",
//         )
//     );
// }
// add_action( 'widgets_init', 'wpbeg_widgets_init' );
    


function register_my_menus() { 
    register_nav_menus( array( 
      'sidemenu' => 'サイドバー',
      'footermenu' => 'フッター',
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );
 
  