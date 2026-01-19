<?php get_header(); ?>
<main>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section class="search__sub">
        <div class="inner">
            <div class="search-message">
                <h1 class="search-message__title">
                    「<span><?php echo get_search_query(); ?></span>」の検索結果 </h1>
                <p class="search-message__num"><?php echo $wp_query->found_posts; ?>件</p>
            </div>
            <div class="blog--sub--search">
                <?php if (have_posts()): ?>
                <ul class="c-blog__list c-blog__list--sub blog__list--sub">
                    <?php while (have_posts()): the_post(); ?>
                    <li class="c-blog__item c-blog__item--sub">
                        <a href="<?php the_permalink(); ?>">
                            <div class="c-blog__img-wrapper">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>
                                <?php endif; ?>

                                <?php
                                        $taxonomy_slug = 'blog_cate';
                        $terms = get_the_terms(get_the_ID(), $taxonomy_slug);
                        if ($terms && !is_wp_error($terms)) :
                            echo '<span class="c-blog__label">' . esc_html($terms[0]->name) . '</span>';
                        endif;
                        ?>
                            </div>
                            <div class=" c-blog__text-wrapper">
                                <h2 class="c-blog__title">
                                    <?php the_title(); ?>
                                </h2>
                                <time datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <p class="c-blog__text">
                                    <?php echo wp_trim_words(get_the_content(), 120, '...'); ?> </p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <nav class="c-pagination">
                    <?php wp_pagenavi(); ?>
                </nav>

                <?php else: ?>
                <div class="search-result__empty">
                    <p class="search-result__empty-text">検索されたキーワードにマッチする記事はありませんでした。</p>
                    <div class="search-result__btn-wrapper">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="c-btn-red c-to-home">ブログ一覧へ戻る</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php get_template_part('template-parts/floating-btns'); ?>
</main>

<?php get_footer(); ?>