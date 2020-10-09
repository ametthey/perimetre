<?php
    $image1 = get_field('instagram_1');
    $image2 = get_field('instagram_2');
    $video1 = get_field('video1');
    $video2 = get_field('video2');
?>
<!-- PERFECT TWO | 5:4 -->
<div class="slide swiper-slide" id="two_five-four">
	<div class="project__container__two">

		<!-- left container -->
		<div class="container left">

			<div class="outer">
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

		</div>

		<!-- right container -->
		<div class="container right">

			<div class="outer">
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
        <p class="template__text__center"><?php the_field( 'text_center' ); ?></p>

	</div>
</div>
