<?php
/**
 *  Two image : 16:9 + 4;5  Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'two_five_four';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'instagram';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
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

	</div>
</div>
