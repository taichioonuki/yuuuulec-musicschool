<?php get_header(); ?>
<main>
    <nav class="c-breadcrumb">
        <div class="inner">
            <ul class="c-breadcrumb__list">
                <li class="c-breadcrumb__item">
                    <a href="./index.html">ホーム</a>
                </li>
                <li class="c-breadcrumb__item">
                    <a href="./blog_list.html">ブログ</a>
                </li>
                <li class="c-breadcrumb__item">
                    <a href="./blog_list.html">ギター</a>
                </li>
                <li class="c-breadcrumb__item">
                    アルペジオが劇的に向上する３つの習慣
                </li>
            </ul>
        </div>
    </nav>

    <div class="blog_details">
        <div class="inner">
            <div class="blog-details__container">
                <article class="blog-details__main">
                    <div class="blog-details__inner">
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <div class="blog-details__header">
                            <div class="blog-details__img">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                                <span class="c-blog__label">
                                    <?php $terms = get_the_terms(get_the_ID(), 'blog_cate'); echo $terms ? esc_html($terms[0]->name) : ''; ?>
                                </span>
                            </div>

                            <h1 class="blog-details__title">
                                <?php the_title(); ?> </h1>
                            <time datetime="<?php the_time('Y-m-d'); ?>"
                                class="blog-details__date"><?php the_time('Y.m.d'); ?></time>
                            <ul class="blog-details__sns-list">
                                <?php 
                                $url = urlencode(get_permalink());
                                $title = urlencode(get_the_title());
                                ?>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>
                                        target=" _blank" rel="noopener noreferrer">
                                        <div class="blog-details__sns-icon facebook">
                                            <picture>
                                                <source media="(max-width: 767px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/img/blog_details/facebook-sp.svg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/facebook.svg"
                                                    width="105" height="40" alt="facebook">
                                            </picture>
                                        </div>
                                    </a>
                                </li>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('https://x.com/share?url=' . $url . '&text=' . $title); ?>"
                                        target="_blank" rel="noopener noreferrer">
                                        <div class="blog-details__sns-icon twitter">
                                            <picture>
                                                <source media="(max-width: 767px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/img/blog_details/twitter-sp.svg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/twitter.svg"
                                                    width="105" height="40" alt="twitter">
                                            </picture>
                                        </div>
                                    </a>
                                </li>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>"
                                        target="_blank" rel="noopener noreferrer">
                                        <div class="blog-details__sns-icon hatena">
                                            <picture>
                                                <source media="(max-width: 767px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/img/blog_details/hatena-sp.svg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/hatena.svg"
                                                    width="105" height="40" alt="blog">
                                            </picture>
                                        </div>
                                    </a>
                                </li>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('https://line.me/R/msg/text/?' . $title . '%20' . $url); ?>"
                                        target="_blank" rel="noopener noreferrer">
                                        <div class="blog-details__sns-icon line">
                                            <picture>
                                                <source media="(max-width: 767px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/img/blog_details/line-sp.svg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/line.svg"
                                                    width="105" height="40" alt="line">
                                            </picture>
                                        </div>
                                    </a>
                                </li>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('http://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>"
                                        target="_blank" rel="noopener noreferrer">
                                        <div class="blog-details__sns-icon pocket">
                                            <picture>
                                                <source media="(max-width: 767px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/img/blog_details/pocket-sp.svg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/pocket.svg"
                                                    width="105" height="40" alt="pocket">
                                            </picture>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="blog-details__text">
                            <?php the_content(); ?>
                        </div>

                        <?php get_template_part('template-parts/single-pagination'); ?>
                        <aside class="blog-details__related">
                            <p class="c-back-black c-title">関連記事</p>
                            <ul class="c-blog__list--related">
                                <li class="c-blog__item c-blog__item--related">
                                    <a href="./blog_details.html">
                                        <div class="blog__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_details-big.jpg"
                                                width="200" height="140" alt="拳をあげて歌う女性" loading="lazy">
                                            <span class="c-blog__label">ギター</span>
                                        </div>
                                        <div class="blog__text-wrapper">
                                            <p class="c-related-title">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time datetime="2025-10-26">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>

                                <li class="c-blog__item c-blog__item--related">
                                    <a href="./blog_details.html">
                                        <div class="blog__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_details-big.jpg"
                                                width="200" height="140" alt="拳をあげて歌う女性" loading="lazy">
                                            <span class="c-blog__label">ギター</span>
                                        </div>
                                        <div class="blog__text-wrapper">
                                            <p class="c-related-title">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time datetime="2025-10-26">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>

                                <li class="c-blog__item c-blog__item--related">
                                    <a href="./blog_details.html">
                                        <div class="blog__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog_details/blog_details-big.jpg"
                                                alt="拳をあげて歌う女性" width="200" height="140" loading="lazy">
                                            <span class="c-blog__label">ギター</span>
                                        </div>
                                        <div class="blog__text-wrapper">
                                            <p class="c-related-title">
                                                タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                            </p>
                                            <time datetime="2025-10-26">0000.00.00</time>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <?php endwhile; endif; ?>
                </article>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/floating-btns'); ?>
</main>

<?php get_footer(); ?>