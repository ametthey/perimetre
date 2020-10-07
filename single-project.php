<?php get_header( 'project' ); ?>
<div class="site swiper-container">
    <div id="section--horizontal" class="swiper-wrapper">

        <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php get_template_part('template-parts/project/mandatory/project-next'); ?>

        <?php endwhile; endif; ?>


    </div>


    <!-- slide count -->
    <div class="slide-counter">
        <span class="current-slide"></span>
        <span>&#x2014;</span>
        <span class="total-slide"></span>
    </div>


</div>
</div>

<?php get_footer(); ?>
