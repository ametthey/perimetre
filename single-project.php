<?php get_header( 'project' ); ?>

    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();

                        the_content();

                        get_template_part('template-parts/project/mandatory/project-next');

                    endwhile;
                endif;
            ?>
        </div>
    </div>

    <!-- </div> -->
<!-- </div> -->

<?php get_footer(); ?>
