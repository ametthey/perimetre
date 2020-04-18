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
?>
<!-- FULLSCREEN -->
<div class="slide">
	<div class="project__container__fullscreen">
		<!-- 16:9 en vidéo -->
		<?php if ( $image ) {
			echo wp_get_attachment_image( $image, 'presentation', false, array( 'class' => 'img--responsive' ) );
		}
		?>
		<!-- 	<video class="video&#45;&#45;cinema" autoplay muted loop playsinline preload="auto"> -->
		<!-- 	<source type="video/mp4" src="/wp&#45;content/uploads/test.mov"></source> -->
		<!-- </video> -->
	</div>
</div>
