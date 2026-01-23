<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body style="display: none;">
    <header id="header" class="header">
        <div class="header__inner inner">
            <?php ( is_front_page() || is_search() ) ? 'h1' : 'div'; 
?>
            <<?php echo $tag; ?> class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="header__logo-img">
                        <picture>
                            <source media="(max-width: 767px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/img/logo-sp.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="音符" width="32"
                                height="49">
                        </picture>
                    </span>
                    <span class="header__logo-text">きたむら<span class="header__logo-bottom"><br
                                class="pc-only">ミュージックスクール</span>
                    </span>
                </a>
            </<?php echo $tag; ?>>
            <div class="header__nav-inner">
                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a
                                href="<?php echo esc_url(home_url('/plan/')); ?>"><span>料金</span></a></li>
                        <li class="header__nav-item"><a
                                href="<?php echo esc_url(home_url('/blog/')); ?>"><span>ブログ</span></a></li>
                        <li class="header__nav-item"><a
                                href="<?php echo esc_url(home_url('/result/')); ?>"><span>卒業実績</span></a></li>
                    </ul>
                </nav>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="c-btn-red header__nav-item--contact pc-only">お問い合わせ</a>
            </div>
            <!-- ハンバーガーメニュー -->
            <div class="hamburger sp-only">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>