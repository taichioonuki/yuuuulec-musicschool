<nav class="c-prev-next">
    <?php $prev_post = get_previous_post();
                            if ( ! empty( $prev_post ) ) :
                            $prev_id = $prev_post->ID; ?>
    <div class="c-prev">
        <a href="<?php echo get_permalink($prev_id); ?>">
            <p class="c-prev-text c-back-black">◀︎
                前の記事</p>
            <div class="c-prev--inner">
                <div class="c-prev--img">
                    <?php if (has_post_thumbnail($prev_id)): ?>
                    <?php echo get_the_post_thumbnail($prev_id, 'thumbnail'); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg" alt="no image">
                    <?php endif; ?>
                </div>
                <p>
                    <?php echo get_the_title($prev_id); ?>
                </p>
            </div>
        </a>
    </div>
    <?php endif; ?>

    <?php 
                            $next_post = get_next_post();
                            if ( ! empty( $next_post ) ) :
                            $next_id = $next_post->ID; ?>
    <div class=" c-next">
        <a href="<?php echo get_permalink($next_id); ?>">
            <p class="c-prev-text c-prev--right c-back-black">
                次の記事 ▶︎
            </p>
            <div class="c-prev--inner">
                <div class="c-next--img">
                    <?php if (has_post_thumbnail($next_id)): ?>
                    <?php echo get_the_post_thumbnail($next_id, 'thumbnail'); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.jpg" alt="No Image">
                    <?php endif; ?>
                </div>
                <p>
                    <?php echo get_the_title($next_id); ?>
                </p>
            </div>
        </a>
    </div>
    <?php endif; ?>
</nav>