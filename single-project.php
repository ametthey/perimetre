<?php get_header(); ?>
<div id="section--horizontal" class="swiper-wrapper">

    <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php get_template_part('template-parts/project/mandatory/project-next'); ?>

    <?php endwhile; endif; ?>

    <!-- slide next / prev -->
    <!-- <div class="slider&#45;next"></div> -->
    <!-- <div class="slider&#45;prev"></div> -->

</div>


<!-- slide count -->
<div class="slide-counter">
    <span class="current-slide"></span>
    <span>–</span>
    <span class="total-slide"></span>
</div>


<div id="section--left"></div>
<div id="section--right"></div>
</div>

<?php get_footer(); ?>
