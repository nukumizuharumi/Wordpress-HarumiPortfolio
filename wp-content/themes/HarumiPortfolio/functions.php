<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');
/**
 *タイトル区切り記号
 */
function my_document_title_separator($separator)
{
  $separator = '＊';
  return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

/**
 * アイキャッチ画像の使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');


// function my_editor_support()
// {
//   //エディタースタイル
//   add_theme_support('editor-styles');
//   add_editor_style('css/style.min.css');
// }
// add_action('after_setup_theme', 'my_theme_support');
