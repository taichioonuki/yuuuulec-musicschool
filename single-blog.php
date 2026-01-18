<?php get_header(); ?>
<main>
    <?php get_template_part('template-parts/breadcrumbs'); ?>

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
                                    <?php $terms = get_the_terms(get_the_ID(), 'blog_cate');
                            echo $terms ? esc_html($terms[0]->name) : ''; ?>
                                </span>
                            </div>
                            <h1 class="blog-details__title">
                                <?php the_title(); ?>
                            </h1>
                            <time datetime="<?php the_time('Y-m-d'); ?>"
                                class="blog-details__date"><?php the_time('Y.m.d'); ?></time>
                            <ul class="blog-details__sns-list">
                                <?php $url = urlencode(get_permalink());
                            $title = urlencode(get_the_title()); ?>
                                <li class="blog-details__sns-item">
                                    <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>"
                                        target="_blank" rel="noopener noreferrer">
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
                                <li class="blog-details__sns-item"> <a
                                        href="<?php echo esc_url('https://line.me/R/msg/text/?' . $title . '%20' . $url); ?>"
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
                                <li class="blog-details__sns-item"> <a
                                        href="<?php echo esc_url('http://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>"
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
                        <?php get_template_part('template-parts/single-nav'); ?>
                        <?php endwhile; endif; ?>
                    </div>

                    <?php get_template_part('template-parts/related-articles'); ?>
                </article>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/floating-btns'); ?>
</main>
<?php get_footer(); ?>