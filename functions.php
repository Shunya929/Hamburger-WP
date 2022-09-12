<?php
// <!-- JS・CSSファイルを読み込む -->

function add_files() {
	// <!-- WordPress提供のjquery.jsを読み込まない -->
	wp_deregister_script('jquery');
 
	// <!-- jQueryの読み込み -->
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "", false );
 
	// <!-- サイト共通JS -->
	wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
 
	// <!-- サイト共通のCSSの読み込み -->
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', "", '' );
}
add_action('wp_enqueue_scripts', 'add_files');

?>