<?php get_header(); ?>
<div id="section--horizontal">

    <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php get_template_part('template-parts/project/mandatory/project-next'); ?>

    <?php endwhile; endif; ?>

    <!-- slide next / prev -->
    <div class="slider-next"></div>
    <div class="slider-prev"></div>

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
