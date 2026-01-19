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
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'), array(), $now);


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
    wp_enqueue_script('main-script', get_theme_file_uri('/js/main.js'), array('jquery', 'simplebar-script',
    'swiper-script'), $now, true);
}
// アクションフックに登録
add_action('wp_enqueue_scripts', 'my_theme_enqueue_files');


// --------------------------------------------------
// ブログ・卒業実績一覧ページの表示件数設定
// --------------------------------------------------

function my_page_conditions($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // アーカイブページ または タクソノミー（genre）ページの場合
        if (is_post_type_archive('blog') || is_post_type_archive('result') || is_tax('genre')) {
            $query->set('posts_per_page', 10); 
        }
    }
}
add_action('pre_get_posts', 'my_page_conditions');


/**
 * 検索対象にカスタム投稿タイプ「blog」を追加する
 */
function my_posts_search_custom( $search, $wp_query ) {
    global $wpdb;

    if ( is_admin() || ! $wp_query->is_main_query() || ! $wp_query->is_search() ) {
        return $search;
    }

    $s = $wp_query->query_vars['s'];
    if ( empty( $s ) ) return $search;

    $search_term = $wpdb->esc_like( $s );

    $search = " AND (
        (
            ({$wpdb->posts}.post_title LIKE '%{$search_term}%') OR 
            ({$wpdb->posts}.post_content LIKE '%{$search_term}%') OR 
            (EXISTS (
                SELECT 1 FROM {$wpdb->term_relationships} 
                INNER JOIN {$wpdb->term_taxonomy} ON {$wpdb->term_relationships}.term_taxonomy_id = {$wpdb->term_taxonomy}.term_taxonomy_id 
                INNER JOIN {$wpdb->terms} ON {$wpdb->term_taxonomy}.term_id = {$wpdb->terms}.term_id 
                WHERE {$wpdb->term_relationships}.object_id = {$wpdb->posts}.ID 
                AND {$wpdb->terms}.name LIKE '%{$search_term}%'
            ))
        )
        AND ({$wpdb->posts}.post_type IN ('post', 'blog'))
    )";

    return $search;
}
add_filter( 'posts_search', 'my_posts_search_custom', 1, 2 );

//お問い合わせページ　テキストエリア
add_filter('wpcf7_form_elements', function($content) {
    // cols, rows, maxlength という文字が含まれる属性を、中身の数字に関わらず一括削除します
    $content = preg_replace('/ (cols|rows|maxlength)="\d*"/', '', $content);
    return $content;
});