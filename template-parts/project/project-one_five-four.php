<?php
    $image = get_field('perfect_one');
    $video = get_field('video');
?>

<div class="slide swiper-slide slide-one">
	<div class="project__container__one">
		<?php if( $video ) { ?>

				<video class="img--alternative" autoplay muted loop playsinline preload="auto">
					<source type="video/mp4" src="<?php echo $video; ?>"></source>
				</video>

			<?php } else { ?>

			<?php if( !empty($image) ): ?>
					<?php echo wp_get_attachment_image($image, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
			<?php endif; ?>

		<?php } ?>
	</div>
    <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>
</div>
