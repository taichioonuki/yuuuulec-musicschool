<?php get_header(); ?>
<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" width="1080" height="200" alt="楽譜">
            </picture>
            <div class="c-fv__overlay--sub"></div>
        </div>
        <div class="c-fv__title-wrapper">
            <h1 class="c-fv__title">ブログ</h1>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section class="c-blog--sub">
        <div class="inner">
            <?php
            $term = get_queried_object();
$term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
?>
            <h2 class="c-section-title">
                <?php echo esc_html($term_name); ?>一覧
            </h2>
            <ul class="c-blog__list c-blog__list--sub">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <li class="c-blog__item c-blog__item--sub">
                    <a href="<?php the_permalink(); ?>">
                        <div class="c-blog__img-wrapper">
                            <?php if (has_post_thumbnail()): the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg"
                                alt="no image">
                            <?php endif; ?>

                            <?php
            $terms = get_the_terms(get_the_ID(), 'blog_cate');
                    if ($terms && !is_wp_error($terms)) : ?>
                            <span class="c-blog__label p-blog-cate__label">
                                <?php echo esc_html($terms[0]->name); ?>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="c-blog__text-wrapper">
                            <h3 class="c-blog__title"><?php the_title(); ?></h3>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <p class="c-blog__text">
                                <?php
                        $content = get_the_content();
                    if (preg_match('/<p>(.*?)<\/p>/is', $content, $match)) {
                        echo strip_tags($match[1]);
                    } else {
                        echo strip_tags($content);
                    }
                    ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <nav class="c-pagination">
                <?php wp_pagenavi(); ?>
            </nav>
        </div>
    </section>


    <?php get_template_part('template-parts/floating-btns'); ?>
</main>
<?php get_footer(); ?>