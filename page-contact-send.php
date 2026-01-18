<?php get_header(); ?>

<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width: 767px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/img/contact-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" width="1080" height="200"
                    alt="パソコンとヘッドホン">
            </picture>
            <div class="c-fv__overlay--sub"></div>
        </div>
        <div class="c-fv__title-wrapper">
            <h1 class="c-fv__title">お問い合わせ</h1>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="contact-send">
        <div class="inner">
            <p class="contact-send__text">
                お問い合わせいただきありがとうございました。
                <br>内容確認後、担当者よりメールにてご連絡いたします。
            </p>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn-red c-to-home">ホームへ戻る</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>