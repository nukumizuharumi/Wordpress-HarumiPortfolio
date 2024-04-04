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
 * アイキャッチ画像の使用可能
 */
  add_theme_support('post-thumbnails');

