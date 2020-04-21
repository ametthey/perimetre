<?php get_header(); ?>
	<div class="site">
		<div id="section--horizontal">


			<?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<!-- NEXT -->
				<div class="slide slide-next">
					<div class="project__next">
						<?php
							$project = new WP_Query(
								array(
									'order'				=> 'ASC',
									'posts_per_page'	=> '1',
									'post_status'		=> 'publish',
									'post_type'			=> 'project',
								)
							);
						?>

						<?php if ( $project->have_posts() ) : ?>	

							<?php while ( $project->have_posts() ) : $project->the_post(); ?>
								<div class="project__next__link">
									<?php next_post_link(); ?>
									<?php get_the_post_thumbnail($post->ID, 'thumbnail' , array( 'class' => 'project__next__thumnail' )); ?>
									<img src="<?php get_the_post_thumbnail_url('thumbnail'); ?>">
								</div>
							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<span class="project__next__project">next project</span>

					</div>
				</div>

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


		</div>
	</div>

<?php get_footer(); ?>
