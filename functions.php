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
  
// $custom_query = new WP_Query(
//       array(
//         'post_type' => 'custom',
//         's' => get_search_query(),
//         'orderby' => 'rand', //ランダムに
//         'posts_per_page' => 8, //8件
//         )
//         );

function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );

$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
  if (count($search_words) > 0) {
    $search = '';
    foreach ($search_words as $word) {
      if (!empty($word)) {
        $search_word = $wpdb->_escape("%{$word}%");
        $search .= " AND (
						{$wpdb->posts}.post_title LIKE '{$search_word}'
           
						-- OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            -- // 検索結果に投稿内容を含めたい場合はコメントアウトを解除
						OR {$wpdb->posts}.ID IN (
							SELECT distinct r.object_id
							FROM {$wpdb->term_relationships} AS r
							INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
							INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
							WHERE t.name LIKE '{$search_word}'
						OR t.slug LIKE '{$search_word}'
						OR tt.description LIKE '{$search_word}'
						)
						OR {$wpdb->posts}.ID IN (
							SELECT distinct p.post_id
							FROM {$wpdb->postmeta} AS p
							WHERE p.meta_value LIKE '{$search_word}'
						)
				) ";
      }
    }
  }
