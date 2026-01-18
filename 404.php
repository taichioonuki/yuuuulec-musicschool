<?php get_header(); ?>
<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width:767px)" srcset="<?Php echo get_template_directory_uri(); ?>/img/404-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" width="1080" height="200" alt="レコード">
            </picture>
            <div class="c-fv__overlay--sub"></div>
        </div>
        <div class="c-fv__title-wrapper">
            <h1 class="c-fv__title">404 not fonud</h1>
        </div>
    </section>

    <div class="message__404">
        <div class="inner">
            <p class="message__404text">
                申し訳ございませんが、お探しのページが見つかりませんでした。
                <br>お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
            </p>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn-red c-to-home">ホームへ戻る</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>