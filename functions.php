<?php
function add_files()
{
  //jquery-3.6.0.min
  wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.6.0.min.js'), array('jquery'));
  // main.js
  wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), 'jquery', '1.0.0', true);
  //リセットcss
  wp_enqueue_style('reset-css', get_theme_file_uri('/scss/foundation/reset'), array(), '1.4.0');
  //メインのcssファイル
  wp_enqueue_style('style-css', get_stylesheet_uri(), array(), '1.0.0');
  //FontAwesome
  wp_enqueue_style( 'font-awesome', '/use.fontawesome.com/releases/v6.1.1/css/all.css', array(), '6.1.1' );
}
add_action('wp_enqueue_scripts', 'add_files');

add_theme_support( 'automatic-feed-links' );
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
  

function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );

function wpbeg_title( $title ) {
  if ( is_front_page() && is_home() ) { //トップページなら
      $title = get_bloginfo( 'name', 'display' );
  } elseif ( is_singular() ) { //シングルページなら
      $title = single_post_title( '', false );
  }
  return $title;
}
add_filter( 'pre_get_document_title', 'wpbeg_title' );
