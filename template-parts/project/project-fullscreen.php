<?php
    $image = get_field('fullscreen');
    $video = get_field('video');
?>

<div class="slide swiper-slide">
	<div class="project__container__fullscreen">
		<?php if( $video ) { ?>

				<video class="video--cinema" autoplay muted loop playsinline preload="auto">
					<source type="video/mp4" src="<?php echo $video; ?>"></source>
				</video>

			<?php } else { ?>

			<?php if( !empty($image) ): ?>
					<?php echo wp_get_attachment_image($image, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
			<?php endif; ?>

		<?php } ?>
	</div>
</div>
