<?php
    $image1 = get_field('instagram_1');
    $image2 = get_field('instagram_2');
    $image3 = get_field('instagram_3');
    $video1 = get_field('video1');
    $video2 = get_field('video2');
    $video3 = get_field('video3');
?>
<!-- PERFECT THREE | INSTAGRAM  -->
<div class="slide swiper-slide">
	<div class="project__container__nine_sixteen">
		<?php if( $video1 ) { ?>

				<video class="img--alternative" autoplay muted loop playsinline preload="auto">
					<source type="video/mp4" src="<?php echo $video1; ?>"></source>
				</video>

			<?php } else { ?>

			<?php if( !empty($image1) ): ?>
					<?php echo wp_get_attachment_image($image1, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
			<?php endif; ?>

		<?php } ?>
		<?php if( $video2 ) { ?>

				<video class="img--alternative" autoplay muted loop playsinline preload="auto">
					<source type="video/mp4" src="<?php echo $video2; ?>"></source>
				</video>

			<?php } else { ?>

			<?php if( !empty($image2) ): ?>
					<?php echo wp_get_attachment_image($image2, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
			<?php endif; ?>

		<?php } ?>
		<?php if( $video3 ) { ?>

				<video class="img--alternative" autoplay muted loop playsinline preload="auto">
					<source type="video/mp4" src="<?php echo $video3; ?>"></source>
				</video>

			<?php } else { ?>

			<?php if( !empty($image3) ): ?>
					<?php echo wp_get_attachment_image($image3, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
			<?php endif; ?>

		<?php } ?>

	</div>
    <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>
</div>
