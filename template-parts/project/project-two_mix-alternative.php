<?php
    $image1 = get_field('instagram_1');
    $image2 = get_field('instagram_2');
    $video1 = get_field('video1');
    $video2 = get_field('video2');
?>
<!-- COMPOSITION WITH TWO IMAGES : 16:9 on the left + 4:5 on the right -->
<div class="slide swiper-slide">
	<div class="project__container_three_mix_alternative">
		<div class="container left">

			<!-- top right item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
				<!-- img&#45;&#45;responsive -->
					<?php if( $video1 ) { ?>

							<video class="img--alternative" autoplay muted loop playsinline preload="auto">
								<source type="video/mp4" src="<?php echo $video1; ?>"></source>
							</video>

						<?php } else { ?>

						<?php if( !empty($image1) ): ?>
								<?php echo wp_get_attachment_image($image1, 'presentation', false,  array( 'class' => 'img--responsive' )); ?>
						<?php endif; ?>

					<?php } ?>
				</div>
			</div>

		</div>
		<div class="container right">

			<div class="outer_quatre_cinq">
				<div class="inner">
					<?php if( $video2 ) { ?>

							<video class="img--alternative" autoplay muted loop playsinline preload="auto">
								<source type="video/mp4" src="<?php echo $video2; ?>"></source>
							</video>

						<?php } else { ?>

						<?php if( !empty($image2) ): ?>
								<?php echo wp_get_attachment_image($image2, 'presentation', false,  array( 'class' => 'img--responsive' )); ?>
						<?php endif; ?>

					<?php } ?>

				</div>
			</div>

		</div>



        <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>




	</div>
</div>
