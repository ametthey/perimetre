<?php
/**
 *  Perfect one Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'perfect_one';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'perfect_one';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('perfect_one');
$video = get_field('video');
?>
<!-- PERFECT ONE | 5:4 -->
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
