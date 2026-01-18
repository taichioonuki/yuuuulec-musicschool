<?php get_header(); ?>
<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width: 767px)"
                    srcset="<?php echo get_template_directory_uri(); ?>/img/contact-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" width="1080" height="200"
                    alt="パソコン">
            </picture>
            <div class="c-fv__overlay--sub"></div>
        </div>
        <div class="c-fv__title-wrapper">
            <h1 class="c-fv__title">お問い合わせ</h1>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div id="contact-form" class="contact-form">
        <div class="inner">
            <div class="contact-form__text-wrapper">
                <p class="contact-form__text">
                    当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。
                    <br>通常３営業日以内にメールにてご連絡させていただきます。
                </p>
            </div>

            <div class="contact-form__form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="ee692fb" title="コンタクトフォーム 1"]'); ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/floating-btns'); ?>

</main>

<?php get_footer(); ?>