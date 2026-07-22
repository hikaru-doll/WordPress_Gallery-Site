<?php
defined('ABSPATH') || exit;
?>
<?php
// chatGPT--------------------------------------------------------------2026/2/19
function my_gallerysite_enqueue_styles()
{

  $uri = get_theme_file_uri();

  wp_enqueue_style(
    'variable',
    $uri . '/assets/css/variable.css',
    array(),
    filemtime(get_theme_file_path('/assets/css/variable.css'))
  );

  wp_enqueue_style(
    'reset',
    $uri . '/assets/css/reset.css',
    array('variable'),
    filemtime(get_theme_file_path('/assets/css/reset.css'))
  );

  wp_enqueue_style(
    'style',
    $uri . '/style.css',
    array('reset'),
    filemtime(get_theme_file_path('/style.css'))
  );

  wp_enqueue_style(
    'main',
    $uri . '/assets/css/main.css',
    array('style'),
    filemtime(get_theme_file_path('/assets/css/main.css'))
  );

  wp_enqueue_style(
    'responsive',
    $uri . '/responsive.css',
    array('main'),
    filemtime(get_theme_file_path('/responsive.css'))
  );
  wp_enqueue_script(
    'my-script',
    get_theme_file_uri('/java.js'),
    array(),
    filemtime(get_theme_file_path('/java.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_gallerysite_enqueue_styles');
//セットアップ----------------------------------------------------
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// WordPress標準機能のメニューを登録する----------------------------
add_theme_support('menus');
register_nav_menus([
  'header_nav' => 'header-nav',
  'footer_nav' => 'footer-nav'
]);

// 投稿画面のACFの画像イメージサイズ変更----------------------------
function custom_acf_admin_image_size()
{
  echo '<style>
        .acf-image-uploader img {
            max-width: 120px !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'custom_acf_admin_image_size');
