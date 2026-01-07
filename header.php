<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="「音楽で生きる」を叶えるミュージックスクール。プロによるマンツーマン授業と音楽業界初の収益化サポートで、あなたの音楽活動を全力サポート！まずは無料体験へ。">
    <meta name="robots" content="noindex">
    <title>きたむらミュージックスクール</title>
    <meta property="og:url" content="https://test.madebyyuu.com/05/">
    <meta property="og:site_name" content="きたむらミュージックスクール">
    <meta property="og:image" content="https://test.madebyyuu.com/05/img/fv.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="きたむらミュージックスクール">
    <meta name="twitter:description" content="「音楽で生きる」を叶えるミュージックスクール。プロによるマンツーマン授業や収益化サポートで、あなたの音楽活動を全力サポート！">
    <meta name="twitter:image" content="https://test.madebyyuu.com/05/img/fv.jpg">
    <meta property="og:type" content="website">
    <meta property="og:title" content="きたむらミュージックスクール">
    <meta property="og:description" content="「音楽で生きる」を叶えるミュージックスクール。プロによるマンツーマン授業や収益化サポートで、あなたの音楽活動を全力サポート！">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg">
    <?php wp_head();?>
</head>

<body>
    <header id="header" class="header">
        <div class="header__inner inner">
            <h1 class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="header__logo-img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="./img/logo-sp.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="音符" width="32"
                                height="49">
                        </picture>
                    </span>
                    <span class="header__logo-text">きたむら<span class="header__logo-bottom"><br
                                class="pc-only">ミュージックスクール</span></span>
                </a>
            </h1>
            <div class="header__nav-inner">
                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a href="./plan.html"><span>料金</span></a></li>
                        <li class="header__nav-item"><a href="./blog_list.html"><span>ブログ</span></a></li>
                        <li class="header__nav-item"><a href="./result_list.html"><span>卒業実績</span></a></li>
                    </ul>
                </nav>
                <a href="./contact_form.html" class="c-btn-red header__nav-item--contact pc-only">お問い合わせ</a>
            </div>
            <!-- ハンバーガーメニュー -->
            <div class="hamburger sp-only">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>