<?php

add_theme_support('post-thumbnails');
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
/**
 * Set the wp_head width based on the theme's design and stylesheet.
 *
 */
function set_common_files() {
  wp_enqueue_style( 'tr-common', get_template_directory_uri() . '/css/common.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',  array(), '4.9.8');
  wp_deregister_script('jquery'); 
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'));
  wp_enqueue_script( 'jquery.matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js');
  
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
}
add_action( 'wp_enqueue_scripts', 'set_common_files' );

//カテゴリ名を取得する関数を登録
add_action( 'rest_api_init', 'register_category_name' );

function register_category_name() {
//register_rest_field関数を用いget_category_name関数からカテゴリ名を取得し、追加する
    register_rest_field( 'post',
        'category_names',
        array(
            'get_callback'    => 'get_category_name'
        )
    );
}

//$objectは現在の投稿の詳細データが入る
function get_category_name( $object ) {
    $category = get_the_category($object[ 'id' ]);
    return $category;
}

//タグを取得する関数を登録
add_action( 'rest_api_init', 'register_tag_name' );

function register_tag_name() {
//register_rest_field関数を用いget_category_name関数からカテゴリ名を取得し、追加する
    register_rest_field( 'post',
        'tag_names',
        array(
            'get_callback'    => 'get_tag_name'
        )
    );
}

//$objectは現在の投稿の詳細データが入る
function get_tag_name( $object ) {
    $tags = get_the_tags($object[ 'id' ]);
    return $tags;
}

function custome_robots_txt_filter($output = '', $public = true) {
    $output .= "Allow: /wp-content/uploads\n";
 
    return $output;
}
add_filter('robots_txt', 'custome_robots_txt_filter', 10, 2);

add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://toroo.jp/column/thanks'; 
}, false );
</script>
EOD;
}

