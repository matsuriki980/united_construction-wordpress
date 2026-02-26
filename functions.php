<?php

/**************************************************
  投稿のタイトルを、<head>のタイトルに出力する
 **************************************************/


function mytheme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mytheme_setup');

/**************************************************
  施工事例の投稿をカスタム投稿で行う
 **************************************************/
function register_post_type_case()
{
    $labels = [
        "name" => "施工事例一覧", // 投稿タイプの複数形名
        "singular_name" => "施工事例", // 単数形名
        "menu_name" => "施工事例",  // 左メニューに表示される名前
        "add_new_item" => "施工事例を追加", // 新規追加画面の見出しなど
        "edit_item" => "施工事例を編集", // 編集画面の見出しなど
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'case'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ];

    register_post_type('case', $args);
}

// カスタムタクソノミー
function register_case_taxonomy()
{
    $args = [
        'label' => '施工事例カテゴリ',
        'public' => true,
        'hierarchical' => true,
        'rewrite' => ['slug' => 'case-category'],
        'show_ui' => true,
        'show_in_rest' => true,
    ];

    register_taxonomy('case-category', 'case', $args);
}

// 関数を呼び出す
add_action('init', 'register_post_type_case');
add_action('init', 'register_case_taxonomy');


/**************************************************
  タイトルの後ろにサイト名がつくのを防ぐ
 **************************************************/
add_filter('document_title_parts', function ($parts) {
    unset($parts['site']);
    return $parts;
});


/**************************************************
  各ページに適した<head>の設定を行う
 **************************************************/
add_action('wp_head', function () {

    // top
    if (is_front_page()) {
        echo '<meta name="description" content="確かな技術で、建築業界、そして、お客様の未来を創造します。">';
        echo '<meta property="og:type" content="website">';
    }

    // about
    if (is_page('about')) {
        echo '<meta name="des
        cription" content="Aboutページです">';
        echo '<meta property="og:type" content="article">';
    }

    // service
    if (is_page('service')) {
        echo '<meta name="description" content="Serviceページです">';
        echo '<meta property="og:type" content="article">';
    }

    // news
    if (is_home()) {
        echo '<meta name="description" content="Newsページです">';
        echo '<meta property="og:type" content="article">';
    }

    // recruit
    if (is_page('recruit')) {
        echo '<meta name="description" content="Recruitページです">';
        echo '<meta property="og:type" content="article">';
    }

    // contact
    if (is_page('contact')) {
        echo '<meta name="description" content="Contactページです">';
        echo '<meta property="og:type" content="article">';
    }

    // case
    if (is_page('case')) {
        echo '<meta name="description" content="Caseページです">';
        echo '<meta property="og:type" content="article">';
    }

    // case-detail
    if (is_page('case-detail')) {
        echo '<meta name="description" content="Case-detailページです">';
        echo '<meta property="og:type" content="article">';
    }

    // news-detail
    if (is_page('news-detail')) {
        echo '<meta name="description" content="News-detailページです">';
        echo '<meta property="og:type" content="article">';
    }
});
