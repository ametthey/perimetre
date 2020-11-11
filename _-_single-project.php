<?php get_header( 'project' ); ?>
    <div class="site swiper-container-outer">
        <div class="swiper-wrapper">

            <!-- Project slide -->
            <div class="swiper-slide">
                <div class="swiper-container">
                    <div id="section--horizontal" class="swiper-wrapper">
                            <?php
                                if ( have_posts() ) :
                                    while ( have_posts() ) : the_post();

                                        the_content();

                                    endwhile;
                                endif;
                            ?>
                    </div>
                </div>
            </div>

            <!-- Next slide -->
            <?php get_template_part('template-parts/project/mandatory/project-next'); ?>
        </div>
    </div>

    <!-- </div> -->
<!-- </div> -->

<?php get_footer(); ?>
