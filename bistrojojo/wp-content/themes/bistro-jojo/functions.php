<?php
function add_files()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  wp_enqueue_style('base.min', get_template_directory_uri() . '/assets/css/base.min.css',);
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css',);
  wp_enqueue_script('jquery');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'add_files');

// タイトルタグの出力
add_theme_support('title-tag');


/*
// cssファイルを読み込む
wp_enqueue_style();

// jsファイルを読み込む
wp_enqueue_script();

// テーマフォルダまでのディレクトリを絶対パスのような形で取得する
get_template_directory_uri();
*/

add_theme_support('post-thumbnails');
add_theme_support('menus');