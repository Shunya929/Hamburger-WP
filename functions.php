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


add_action( 'init', 'create_book_taxonomies', 0 );

    // "book" カスタム投稿タイプに対して genres と writers という2つのカスタム分類を作成する
    function create_book_taxonomies() {
        // （カテゴリーのような）階層化したカスタム分類を新たに追加
        $labels = array(
            'name'              => _x( 'Genres', 'taxonomy general name' ),
            'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Genres' ),
            'all_items'         => __( 'All Genres' ),
            'parent_item'       => __( 'Parent Genre' ),
            'parent_item_colon' => __( 'Parent Genre:' ),
            'edit_item'         => __( 'Edit Genre' ),
            'update_item'       => __( 'Update Genre' ),
            'add_new_item'      => __( 'Add New Genre' ),
            'new_item_name'     => __( 'New Genre Name' ),
            'menu_name'         => __( 'Genre' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'genre' ),
        );

        register_taxonomy( 'genre', array( 'book' ), $args );

        // （タグのような）階層のないカスタム分類を新たに追加
        $labels = array(
            'name'                       => _x( 'Writers', 'taxonomy general name' ),
            'singular_name'              => _x( 'Writer', 'taxonomy singular name' ),
            'search_items'               => __( 'Search Writers' ),
            'popular_items'              => __( 'Popular Writers' ),
            'all_items'                  => __( 'All Writers' ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __( 'Edit Writer' ),
            'update_item'                => __( 'Update Writer' ),
            'add_new_item'               => __( 'Add New Writer' ),
            'new_item_name'              => __( 'New Writer Name' ),
            'separate_items_with_commas' => __( 'Separate writers with commas' ),
            'add_or_remove_items'        => __( 'Add or remove writers' ),
            'choose_from_most_used'      => __( 'Choose from the most used writers' ),
            'not_found'                  => __( 'No writers found.' ),
            'menu_name'                  => __( 'Writers' ),
        );

        $args = array(
            'hierarchical'          => false,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'writer' ),
        );

        register_taxonomy( 'writer', 'book', $args );
    }
?>