<?php
/*
 * Template Name: HOME
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
						<a href="#">facebook</a>
						<a href="#">instagram</a>
						<a href="#">linkedin</a>
					</div>
					<div class="about__links__container">
						<a class="about__link" href="">newsletter</a>
					</div>
				</div>
			</div>
		</div>


	</div>

</div>


<?php get_footer(); ?>
