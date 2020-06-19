<?php
/**
 *  Fullscreen Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'fullscreen';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'fullscreen';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('fullscreen');
$video = get_field('video');
?>
<!-- FULLSCREEN -->
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
