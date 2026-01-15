<?php get_header(); ?>

<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width: 767px)" srcset="./img/result_list/result-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/
            </picture>
        </div>
        <div class=" c-fv__title-wrapper">
                <h1 class="c-fv__title">卒業実績</h1>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section class="result">
        <div class="inner">
            <?php
    $term = get_queried_object();
    $term_name = (isset($term->name)) ? $term->name : '卒業実績';
    ?>

            <h2 class="c-section-title">
                <?php echo esc_html($term_name); ?>
            </h2>
            <ul class="result__list">
                <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'      => 'result', 
    'posts_per_page' => 10,       
    'paged'          => $paged,
);
$result_query = new WP_Query($args);
?>

                <?php if ($result_query->have_posts()) : ?>
                <?php while ($result_query->have_posts()) : $result_query->the_post(); ?>
                <li class="result__item c-blog__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="result__img">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg"
                                alt="no image">
                            <?php endif; ?>

                            <span class="c-blog__label">
                                <?php 
        $terms = get_the_terms(get_the_ID(), 'genre');
        echo $terms ? esc_html($terms[0]->name) : ''; 
        ?>
                            </span>
                        </div>
                        <h3 class="result__title">
                            <?php the_title(); ?>
                        </h3>
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>

            <nav class="c-pagination">
                <?php wp_pagenavi(); ?>
            </nav>
        </div>
    </section>

    <?php get_template_part('template-parts/floating-btns'); ?>
</main>

<?php get_footer(); ?>