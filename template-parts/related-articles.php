<?php $post_type_slug = get_post_type();
if ($post_type_slug === 'result') {    $taxonomy_slug = 'genre';
} else {
    $taxonomy_slug = 'blog_cate';
}

$terms = get_the_terms(get_the_ID(), $taxonomy_slug);

if (!empty($terms) && !is_wp_error($terms)):
    $term_ids = wp_list_pluck($terms, 'term_id');
    $args = [
        'posts_per_page' => 3,
        'post_type' => $post_type_slug,
        'post__not_in' => [get_the_ID()],
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => [
            [ 'taxonomy' => $taxonomy_slug,
            'field' => 'term_id',
            'terms' => $term_ids, ],
    ],
];
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()): ?>
<aside class="blog-details__related">
    <p class="c-back-black c-title">関連記事</p>
    <ul class="c-blog__list--related">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <li class="c-blog__item c-blog__item--related">
            <a href="<?php the_permalink(); ?>">
                <div class="blog__img">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg" alt="no image">
                    <?php endif; ?>
                    <span class="c-blog__label">
                        <?php $terms = get_the_terms(get_the_ID(), $taxonomy_slug);
            echo $terms ? esc_html($terms[0]->name) : ''; ?>
                    </span>
                </div>
                <div class="blog__text-wrapper">
                    <p class="c-related-title">
                        <?php the_title(); ?>
                    </p>
                    <time datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time('Y.m.d'); ?>
                    </time>
                </div>
            </a>
        </li>
        <?php endwhile;
    wp_reset_postdata(); ?>
    </ul>
</aside> <?php endif;?> <?php endif;?>