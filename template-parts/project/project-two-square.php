<?php
    $image1 = get_field('instagram_1');
    $image2 = get_field('instagram_2');
    $video1 = get_field('video1');
    $video2 = get_field('video2');
?>
<!-- COMPOSITION WITH TWO IMAGES : 1:1 + 1:1-->
<div class="slide swiper-slide">
	<div class="project__container_two_square">
		<div class="container left">

			<!-- top right item -->
			<!-- <div class="outer_square"> -->
			<!-- 	<div class="inner"> -->
				<!-- img&#45;&#45;responsive -->
					<?php if( $video1 ) { ?>

							<video class="img--alternative" autoplay muted loop playsinline preload="auto">
								<source type="video/mp4" src="<?php echo $video1; ?>"></source>
							</video>

						<?php } else { ?>

						<?php if( !empty($image1) ): ?>
								<?php echo wp_get_attachment_image($image1, 'presentation', false,  array( 'class' => 'img__height--80' )); ?>
						<?php endif; ?>

					<?php } ?>
			<!-- 	</div> -->
			<!-- </div> -->

		</div>
		<div class="container right">

			<!-- <div class="outer_square"> -->
			<!-- 	<div class="inner"> -->
					<?php if( $video2 ) { ?>

							<video class="img--alternative" autoplay muted loop playsinline preload="auto">
								<source type="video/mp4" src="<?php echo $video2; ?>"></source>
							</video>

						<?php } else { ?>

						<?php if( !empty($image2) ): ?>
								<?php echo wp_get_attachment_image($image2, 'presentation', false,  array( 'class' => 'img__height--80' )); ?>
						<?php endif; ?>

					<?php } ?>

			<!-- 	</div> -->
			<!-- </div> -->

		</div>

        <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>
	</div>
</div>
