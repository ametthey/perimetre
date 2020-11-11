
<div class="menu__projects">

    <?php
    $project = new WP_Query(
        array(
            'post_type'		=> 'project',
            'post_status'	=> 'publish',
            'posts_per_page'=> -1,
            'order'			=> 'ASC'
        )
    );
    ?>

    <?php if ( $project->have_posts() ) : ?>

    <?php while ( $project->have_posts() ) : $project->the_post(); ?>

    <div class="menu__project__item" data-fx="14">
        <a href="<?php the_permalink(); ?>" class="lazyload" data-img="<?php the_post_thumbnail_url('project_hover'); ?>">
            <h1><?php the_title(); ?></h1>
        </a>
        <h4>
            <?php
                $terms = get_the_terms( $post->ID , 'project_type', array('number' => 3) );
                foreach ( $terms as $term ) {
                    echo '<span class="menu__project__item__category">'. $term->name . '</span> <span>-</span> ';
                }
            ?>
        </h4>
    </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>
</div>
