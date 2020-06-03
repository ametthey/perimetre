<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<div class="site">

    <div id="section--vertical">

        <!-- home page visible on page load -->
        <div class="slide">

            <div class="section__presentation__website">
                <!-- 16:9 en vidéo -->
                <video class="video--cinema" autoplay muted loop playsinline preload="auto">
                    <source type="video/mp4" src="<?php echo get_field('home_background_video'); ?>"></source>
                </video>

                <h1 class="home__sentence__presentation">creative studio <br>based in paris</h1>

                <button type="button" class="js-trigger">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/chevron.svg" alt="">
                </button>

            </div>

        </div>

        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
        <!-- Include the single post content template. -->
        <?php get_template_part( 'template-parts/content', 'home' ); ?>
        <?php endwhile; endif; ?>

        <div class="slide footer">
            <div class="section__footer">
                <div class="section__footer__left">
                    <p>PERIMETRE ©2020	<br> 74 rue des martyrs, 75018 PARIS</p>
                </div>
                <div class="section__footer__right">
                    <div class="socials__links__container">
                        <?php if ( get_field('footer_facebook', 'option') ): ?>
                            <a href="<?php the_field('footer_facebook', 'option'); ?>" target="_blank">facebook</a>
                        <?php endif; ?>
                        <?php if ( get_field('footer_instagram', 'option') ): ?>
                            <a href="<?php the_field('footer_instagram', 'option'); ?>" target="_blank">instagram</a>
                        <?php endif; ?>
                        <?php if ( get_field('footer_linkedin', 'option') ): ?>
                            <a href="<?php the_field('footer_linkedin', 'option'); ?>" target="_blank">linkedin</a>
                        <?php endif; ?>
                    </div>
                    <div class="about__links__container">
                        <?php if ( get_field('footer_newsletter', 'option') ): ?>
                            <a class="about__link" href="<?php the_field('footer_newsletter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow-right.svg" alt="">newsletter</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="section__footer__arrow">
                    <img class="button__top" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_up.svg" alt"">
                </div>
            </div>
        </div>


    </div>

</div>


<?php get_footer(); ?>
