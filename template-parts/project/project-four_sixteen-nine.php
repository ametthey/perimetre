<?php
    $image1 = get_field('four_cinema_image_1');
    $image2 = get_field('four_cinema_image_2');
    $image3 = get_field('four_cinema_image_3');
    $image4 = get_field('four_cinema_image_4');
    $video1 = get_field('video1');
    $video2 = get_field('video2');
    $video3 = get_field('video3');
    $video4 = get_field('video4');
?>
<!-- COMPOSITION WITH FOUR IMAGES AND RATIO 16:9 -->
<div class="slide swiper-slide">
	<div class="project__container_four_sixteen_nine">
		<!-- left container -->
		<div class="container left">
			<!-- top left item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
					<?php if( $video1 ) { ?>

						<video class="img--alternative" autoplay muted loop playsinline preload="auto">
							<source type="video/mp4" src="<?php echo $video1; ?>"></source>
						</video>

					<?php } else { ?>

							<?php if( !empty($image1) ): ?>
									<?php echo wp_get_attachment_image($image1, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
							<?php endif; ?>

					<?php } ?>
				</div>
			</div>

			<!-- bottom left item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
					<?php if( $video2 ) { ?>

						<video class="img--alternative" autoplay muted loop playsinline preload="auto">
							<source type="video/mp4" src="<?php echo $video2; ?>"></source>
						</video>

					<?php } else { ?>

							<?php if( !empty($image2) ): ?>
									<?php echo wp_get_attachment_image($image2, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
							<?php endif; ?>

					<?php } ?>
				</div>
			</div>

		</div>

		<!-- right container -->
		<div class="container right">

			<!-- top right item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
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
			</div>

			<!-- bottom right item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
					<?php if( $video4 ) { ?>

						<video class="img--alternative" autoplay muted loop playsinline preload="auto">
							<source type="video/mp4" src="<?php echo $video4; ?>"></source>
						</video>

					<?php } else { ?>

							<?php if( !empty($image4) ): ?>
									<?php echo wp_get_attachment_image($image4, 'presentation', false,  array( 'class' => 'img--alternative' )); ?>
							<?php endif; ?>

					<?php } ?>
				</div>
			</div>
		</div>
        <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>
	</div>
</div>
