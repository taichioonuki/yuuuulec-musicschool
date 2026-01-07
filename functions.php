<?php

// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
function custom_theme_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
'style',
'script'
)
    );
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');


// --------------------------------------------------
// ファイルの読み込み（CSS / JavaScript）
// --------------------------------------------------
function my_theme_enqueue_files()
{
    // キャッシュ対策用のタイムスタンプ
    $now = date('YmdHis');

    // --- CSSの読み込み ---

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap',
        array(),
        null
    );

    // SimpleBar CSS
    wp_enqueue_style('simplebar-style', 'https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null);

    // メインのCSS（style.css）
    wp_enqueue_style('main-style', get_template_directory_uri('/css/style.css'), array(), $now);


    // --- JavaScriptの読み込み ---

    // WordPress標準のjQueryを解除して、CDN版を読み込む
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);

    // SimpleBar JS
    wp_enqueue_script(
        'simplebar-script',
        'https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js',
        array('jquery'),
        null,
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-script',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
        array('jquery'),
        null,
        true
    );

    // メインのJS（main.js）
    // ※jQuery, simplebar, swiperの後に読み込むよう依存関係を指定
    wp_enqueue_script('main-script', get_template_directory_uri('/js/main.js'), array('jquery', 'simplebar-script',
    'swiper-script'), $now, true);
}
// アクションフックに登録
add_action('wp_enqueue_scripts', 'my_theme_enqueue_files');
