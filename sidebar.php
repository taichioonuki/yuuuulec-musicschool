<aside class="blog-details__sidebar">
    <div class="sidebar__newsletter">
        <p class="title sidebar__newsletter-title c-back-black">
            無料メールマガジン
        </p>
        <div class="sidebar__newsletter--inner">
            <a href="./blog_details.html">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/newsletter.jpg" alt="バナー広告"
                    width="220" height="170" loading="lazy">
                <span>バナー広告</span>
            </a>
        </div>
    </div>

    <div class="sidebar__search">
        <p class="title c-back-black">ブログ内を検索</p>
        <div class="sidebar__search--inner">
            <form class="sidebar__search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input type="search" name="s" value="<?php echo get_search_query(); ?>">
                <button type="submit">
                    <span class="sidebar__search-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/search.svg" width="40"
                            height="40" alt="検索">
                    </span>
                </button>
            </form>
        </div>
    </div>

    <div class="sidebar__recommend">
        <p class="title sidebar__recommend-title c-back-black">
            おすすめの記事
        </p>
        <ul class="sidebar__recommend-list">
            <?php 
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'blog_recommend',
                        'field' => 'slug',
                        'terms' => 'recommend',
                    )
                )
            );
            $recommend_query = new WP_Query($args);
            if ($recommend_query->have_posts()) : 
                while ($recommend_query->have_posts()) : $recommend_query->the_post();
            ?>
            <li class="sidebar__recommend-item">
                <a href="<?php the_permalink(); ?>" class="sidebar__recommend-link">
                    <div class="sidebar__recommend-img">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'loading' => 'lazy')); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/recommend.jpg" width="95"
                            height="75" alt="default">
                        <?php endif; ?>
                    </div>
                    <p class="sidebar__recommend-title">
                        <?php the_title(); ?>
                    </p>
                </a>
            </li>
            <?php 
            endwhile; 
            wp_reset_postdata();
            else: ?>
            <p>おすすめ記事がありません</p>
            <?php endif; ?>
        </ul>
    </div>

    <div class="sidebar__category">
        <p class="title sidebar__category-title c-back-black">
            カテゴリー
        </p>
        <ul class="sidebar__category-list">
            <?php 
            $terms = get_terms(array(
                'taxonomy' => 'blog_cate',
                'hide_empty' => true,
            ));
            if (!empty($terms) && !is_wp_error($terms)):
                foreach ($terms as $term): 
            $post_args = array(
            'post_type' => 'blog', 
            'posts_per_page' => 1,
            'tax_query' => array(
            array(
            'taxonomy' => 'blog_cate',
            'field' => 'term_id',
            'terms' => $term->term_id,
            ),
            ),
            );
            $post_query = new WP_Query($post_args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();
    ?>
            <li class="sidebar__category-item">
                <a href="<?php the_permalink(); ?>">
                    <?php echo esc_html($term->name); ?>
                </a>
            </li>
            <?php endwhile;
            wp_reset_postdata();
            endif; 
            endforeach;
            else: ?>
            <p>カテゴリーがありません</p>
            <?php
            endif; ?>
        </ul>
    </div>
</aside>