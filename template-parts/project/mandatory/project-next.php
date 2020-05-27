<!-- NEXT -->
<div class="slide slide-next">
    <div class="project__next">
        <?php

        /*
         * Wordpress Related post with WP-_Query
         * @ https://since1979.dev/wordpress-related-posts-with-wp_query
         */

        $project = new WP_Query(
            array(
                'post_type'			=> 'project',
                // 'order'				=> 'ASC',
                'orderby'           => 'modified',
                'posts_per_page'	=> '2',
                'post_status'		=> 'publish',
                'category__in' => wp_get_post_categories(get_the_ID()),
                'post__not_in' => array(get_the_ID()),
            )
        );
        ?>

        <?php if ( $project->have_posts() ) : ?>

        <?php while ( $project->have_posts() ) : $project->the_post(); ?>
        <div class="project__next__link">
            <a href="<?php the_permalink(); ?>" class="lazyload">
                <h1><?php the_title(); ?></h1>
            </a>
            <img src="<?php the_post_thumbnail('medium'); ?>" alt="">
        </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <span class="project__next__project">next project</span>

    </div>
</div>

