<?php get_header(); ?>
<main>
    <div class="fv">
        <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv-sp.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fv.jpg" width="1080" height="470" alt="ギターを弾く女性">
        </picture>
        <div class="fv__overlay"></div>
        <div class="catchphrase">
            <p class="catchphrase__text">「音楽で生きる」<br class="sp-only">を叶える<br>ミュージックスクール
            </p>
        </div>
    </div>

    <section class="main-message">
        <div class="inner">
            <h2 class="message__title">全人類、<br class="sp-only">ミュージシャン計画。</h2>
            <p class="main-message__text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
            <div class="semicircle">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/img/semicircle-sp.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/semicircle.svg" width="858" height="56"
                        alt="semicircle">
                </picture>
            </div>

            <ul class="message__list">
                <li class="message__item">
                    <p class="message__item-title">
                        Enthusiasm
                    </p>
                    <span class="dot-message dot-top"></span>
                    <p class="message__item-text">熱狂し</p>
                </li>
                <li class="message__item">
                    <p class="message__item-title">
                        Envision
                    </p>
                    <span class="dot-message"></span>
                    <p class="message__item-text">想像し</p>
                </li>
                <li class="message__item">
                    <p class="message__item-title">
                        Effulgent
                    </p>
                    <span class="dot-message"></span>
                    <p class="message__item-text">輝く存在へ</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="promotion" class="promotion">
        <div class="promotion__inner inner">
            <h2 class="promotion__title">音楽業界初！
                <br>収益化までサポートする<br class="sp-only">ミュージックスクール
            </h2>
            <p class="promotion__text">楽器や作詞作曲などの<br class="sp-only sp-only">技術・知識はもちろんのこと<br>自分で稼ぎつづけるための<br
                    class="sp-only">ビジネス面もサポートします！</p>
        </div>
    </section>

    <section id="reason" class="reason">
        <div class="inner">
            <h2 class="c-top-section-title">きたむらミュージック<br class="sp-only">スクールが選ばれる理由</h2>
            <div class="reason__inner">
                <ul class="reason__list">
                    <li class="reason__item">
                        <div class="reason__img">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/reason01-sp.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/reason01.jpg"
                                    alt="犬を抱いてピアノの前に座る男性" width="350" height="247" loading="lazy">
                            </picture>
                        </div>
                        <div class="reason__container">
                            <h3 class="reason__item-title">技術面はプロによるマンツーマン授業！</h3>
                            <p class="reason__item-text">第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
                        </div>
                    </li>

                    <li class="reason__item">
                        <div class="reason__img">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/reason02-sp.jpg" width="335"
                                    height="200">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/reason02.jpg" alt="サポートを受ける生徒"
                                    width="350" height="247" loading="lazy">
                            </picture>
                        </div>
                        <div class="reason__container">
                            <h3 class="reason__item-title">収益化するためのビジネスサポート！</h3>
                            <p class="reason__item-text">
                                コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
                            </p>
                        </div>
                    </li>

                    <li class="reason__item">
                        <div class="reason__img">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/reason03-sp.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/reason03.jpg" alt="練習する生徒"
                                    width="350" height="247" loading="lazy">
                            </picture>
                        </div>
                        <div class="reason__container">
                            <h3 class="reason__item-title">24時間365日使える練習ROOMを完備！</h3>
                            <p class="reason__item-text">
                                一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。　（アプリで予約が必要です）
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="voice" class="voice">
        <h2 class="c-top-section-title">生徒さんたちの声</h2>
        <div class="voice__container inner">
            <div class="swiper voice__inner">
                <div class="swiper-wrapper ">
                    <?php
                $args = array(
                    'post_type'      => 'result',
                    'posts_per_page' => 6,
                );
$voice_query = new WP_Query($args);
?>

                    <?php if ($voice_query->have_posts()) : ?>
                    <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
                    <div class="swiper-slide voice__item">
                        <a href="./result_details.html" class="voice__link">
                            <div class="voice__img">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg"
                                    width="270" height="190" loading="lazy">
                                <?php endif; ?>
                            </div>
                            <div class="voice__text-block">
                                <h3 class="voice__title">
                                    <?php
        $job  = get_field('job');
                        $name = get_field('name');

                        if ($job || $name):
                            echo esc_html($job) . '　' . esc_html($name) . 'さん';
                        else:
                            the_title();
                        endif;
                        ?>
                                </h3>
                                <p class="voice__text">
                                    <?php echo wp_trim_words(get_the_content(), 60, '...'); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                    <p>現在、生徒さんの声は準備中です。</p>
                    <?php endif; ?>

                </div>
            </div>
            <button class="voice__prev"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-l.svg"
                    width="30" height="20" alt="左"></button>
            <button class="voice__next"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-r.svg"
                    width="30" height="20" alt="右"></button>
        </div>
    </section>

    <section id="flow" class="flow">
        <div class="inner">
            <h2 class="c-top-section-title">ご利用の流れ</h2>
            <div class="flow__wrapper">
                <ol class="flow__list">
                    <li class="flow__step">
                        <span class="dot-flow"></span>
                        <div class="flow__container">
                            <p class="flow__heading">お問い合わせ</p>
                            <p class="flow__text">
                                まずはフォームまたはメールにてお問い合わせください。<br>
                                ヒアリングの日程を調整します。
                            </p>
                        </div>
                    </li>

                    <li class="flow__step">
                        <span class="dot-flow"></span>
                        <div class="flow__container">
                            <p class="flow__heading">ヒアリング</p>
                            <p class="flow__text">
                                現在の技術面や将来の目標などをお伺いします。
                                <br>悩みや不安な事もお気軽にご相談ください。
                            </p>
                        </div>
                    </li>

                    <li class="flow__step">
                        <span class="dot-flow"></span>
                        <div class="flow__container">
                            <p class="flow__heading">プランのご提案</p>
                            <p class="flow__text">
                                ライフスタイルや目標によって最適なプランをご提案します。<br>
                                継続できるようサポートいたします。
                            </p>
                        </div>
                    </li>

                    <li class="flow__step">
                        <span class="dot-flow last-dot"></span>
                        <div class="flow__container">
                            <p class="flow__heading">ご入学</p>
                            <p class="flow__text">
                                お申し込み完了後、レッスンがスタートします。<br>
                                マンツーマン指導なので、いつからでもスタートが可能です。
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section id="faq" class="faq">
        <div class="inner">
            <h2 class="c-top-section-title">よくあるご質問</h2>
            <ul class="faq__list">
                <li class="faq__item">
                    <button class="faq__question js-faq-toggle" aria-expanded="false">
                        <span class="faq__icon faq__icon--q">Q</span>
                        <span class="faq__text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</span>
                    </button>
                    <div class="faq__answer" hidden>
                        <span class="faq__icon faq__icon--a">A</span>
                        <p class="faq__text">副業で始めた方や、未経験からスタートした方も多く、平均して3〜6ヶ月で成果が出ています。</p>
                    </div>
                </li>

                <li class="faq__item">

                    <button class="faq__question js-faq-toggle" aria-expanded="false">
                        <span class="faq__icon faq__icon--q">Q</span>
                        <span class="faq__text">途中でプランを変更することは可能ですか？</span>
                    </button>
                    <div class="faq__answer" hidden>
                        <span class="faq__icon faq__icon--a">A</span>
                        <p class="faq__text">途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                    </div>
                </li>

                <li class="faq__item">
                    <button class="faq__question js-faq-toggle" aria-expanded="false">
                        <span class="faq__icon faq__icon--q">Q</span>
                        <span class="faq__text">入学金などの分割払いはできますか？</span>
                    </button>

                    <div class="faq__answer" hidden>
                        <span class="faq__icon faq__icon--a">A</span>
                        <p class="faq__text">入学金は全額支払いとなります。月額の支払いは可能です。</p>
                    </div>
                </li>

                <li class="faq__item">
                    <button class="faq__question js-faq-toggle" aria-expanded="false">
                        <span class="faq__icon faq__icon--q">Q</span>
                        <span class="faq__text">休学することも可能ですか？</span>
                    </button>
                    <div class="faq__answer" hidden>
                        <span class="faq__icon faq__icon--a">A</span>
                        <p class="faq__text">休学することは可能です。毎月15までに申請すれば翌月から休学となります。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="blog" class="blog page-last">
        <div class="inner">
            <h2 class="c-top-section-title">ブログ</h2>
            <div class="blog__container">
                <ul class="blog__list">
                    <?php
                // おすすめにチェックが入った最新3件を取得するクエリ
                $blog_args = array(
                    'post_type'      => 'blog',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order',
                    'order'   => 'ASC',
                    'tax_query'     => array(
                        array(
                            'taxonomy'     => 'blog_recommend',
                            'field'    => 'name',
                            'terms'   => 'おすすめ',
                        )
                    )
                );
$blog_query = new WP_Query($blog_args);
?>

                    <?php if ($blog_query->have_posts()) : ?>
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <li class="c-blog__item blog__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="top__img-wrapper">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg"
                                    alt="no image">
                                <?php endif; ?>

                                <?php
$terms = get_the_terms(get_the_ID(), 'blog_cate');
                        if (!empty($terms) && !is_wp_error($terms)) :
                            echo '<span class="c-blog__label">' . esc_html($terms[0]->name) . '</span>';
                        endif;
                        ?>
                                endif;
                                ?>
                            </div>
                            <p class="blog__title"><?php the_title(); ?></p>
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?>
                            </time>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="more-link">
                <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ一覧へ</a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/floating-btns'); ?>
</main>
<?php get_footer(); ?>