<?php 

/*
 * Template Name: Project 
 */

get_header(); ?>

	<div class="site">
		<div id="section--horizontal">
			<!-- test -->
			<?php 
			$args = array(
					'post_type' => 'project',
				);

			$loop = new WP_Query( $args );


			?>
			
				<?php if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post(); ?>
					 <?php the_content() ?>
				<?php endwhile; endif; ?>

			<?php wp_reset_postdata(); ?>



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



	</div>

<?php get_footer(); ?>
