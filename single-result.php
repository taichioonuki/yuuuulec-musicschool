<?php get_header(); ?>
<main>

    <?php get_template_part('template-parts/breadcrumbs'); ?>


    <section class="result-details">
        <div class="inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="result-details__wrapper">
                <div class="result-details__container">
                    <div class="result-details__img">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg" width="387"
                            height="273" alt="noimage">
                        <?php endif; ?>
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'genre');
                if ($terms && !is_wp_error($terms)) :
                    ?>
                        <span class="c-blog__label"><?php echo $terms[0]->name; ?></span>
                        <?php endif; ?>
                    </div>
                    <h1 class="result-details__title">
                        <?php the_title(); ?>
                    </h1>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>

                <div class="result-details__profile">
                    <table class="result-details__table">
                        <?php
                    $fields = [
                        'name' => '名前',
                        'job' => '職業',
                        'genre' => 'ジャンル',
                        'result' => '実績',
                        'sns' => 'SNS'
                    ];
                foreach ($fields as $slug => $label) :
                    $value = get_post_meta(get_the_ID(), $slug, true); 
                    if ($value) :
                        ?>
                        <tr class="result-details__<?php echo esc_attr($slug); ?>">
                            <td class="left-cell"><?php echo esc_html($label); ?></td>
                            <td class="right-cell"><?php echo esc_html($value); ?></td>
                        </tr>
                        <?php
                    endif;
                endforeach;
                ?>
                    </table>
                    <div class="result-details__text">
                        <?php the_content(); ?>
                    </div>
                </div>

                <nav class="c-prev-next result-details__prev-next">
                    <?php get_template_part('template-parts/single-nav'); ?>
                </nav>
            </div>
            <aside class="related result-details__list">
                <?php get_template_part('template-parts/related-articles'); ?>
            </aside>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <?php get_template_part('template-parts/floating-btns'); ?>
</main>

<?php get_footer(); ?>