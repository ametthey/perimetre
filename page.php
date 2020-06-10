<?php
get_header(); ?>

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
                            <a class="about__link" href="<?php the_field('footer_newsletter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">newsletter</a>
                        <?php endif; ?>

                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup">
                        <form action="https://studio.us19.list-manage.com/subscribe/post?u=8beb8d988a3674a70fac50bcd&amp;id=4fede95bdd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">

                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <!-- <div style="position: absolute; left: &#45;5000px;" aria&#45;hidden="true"><input type="text" name="b_8beb8d988a3674a70fac50bcd_4fede95bdd" tabindex="&#45;1" value=""></div> -->
                            <!-- <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc&#45;embedded&#45;subscribe" class="button"></div> -->
                            <!-- </div> -->
                        </form>
                        </div>

                        <!--End mc_embed_signup-->
                    </div>
                </div>
                <div class="section__footer__arrow">
                    <img class="button__top" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_up.svg" alt"">
                </div>
            </div>
        </div>


    </div>

<!-- </div> -->


<?php get_footer(); ?>
