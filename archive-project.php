<?php get_header(); ?>


<div class="site" style="width 100%; height: 100%;">
	<div class="archive" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
		<?php if ( have_posts()  ) : while ( have_posts() ): the_post(); ?> 


			<?php the_author(); ?>
			<?php the_title(); ?>
			<?php the_permalink(); ?>
			<?php the_shortlink(); ?>


		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>
