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



/**
 * contact form 7のときに整形をOFFにする
 *
 * @return bool
 */
function my_wpcf7_autop()
{
  return false;
}
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
