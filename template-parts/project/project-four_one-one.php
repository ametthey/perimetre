<?php

/**
 *  Quatre image au format carré Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'four_one_one';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'four_one_one';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image1 = get_field('four_square_image_1');
$image2 = get_field('four_square_image_2');
$image3 = get_field('four_square_image_3');
$image4 = get_field('four_square_image_4');
?>
<!-- COMPOSITION WITH FOUR IMAGES AND RATIO 1:1 -->
<div class="slide">
	<div class="project__container_four_one_one">
		<!-- left container -->
		<div class="container left">
			<!-- top left item -->
			<div class="outer_one_one">
				<div class="inner">
					<?php echo wp_get_attachment_image($image1, 'presentation', false,  array( 'class' => ' img--alternative' )); ?>
					<!-- <video class="video&#45;&#45;square" autoplay muted loop playsinline preload="auto"> -->
					<!-- 	<source type="video/mp4" src="/wp&#45;content/uploads/perimetre&#45;converse&#45;traveling.mov"></source> -->
					<!-- </video> -->
				</div>
			</div>

			<!-- bottom left item -->
			<div class="outer_one_one">
				<div class="inner">
					<?php echo wp_get_attachment_image($image2, 'presentation', false,  array( 'class' => ' img--alternative' )); ?>
				</div>
			</div>

		</div>

		<!-- right container -->
		<div class="container right">

			<!-- top right item -->
			<div class="outer_one_one">
				<div class="inner">
					<?php echo wp_get_attachment_image($image3, 'presentation', false,  array( 'class' => ' img--alternative' )); ?>
				</div>
			</div>

			<!-- bottom right item -->
			<div class="outer_one_one">
				<div class="inner">
					<?php echo wp_get_attachment_image($image4, 'presentation', false,  array( 'class' => ' img--alternative' )); ?>
				</div>
			</div>

		</div>
	</div>
</div>

