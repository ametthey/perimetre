<?php
/**
 *  Three instagram storye Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'instagram';

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
$image3 = get_field('instagram_3');
?>
<!-- PERFECT THREE | INSTAGRAM  -->
<div class="slide">
	<div class="project__container__nine_sixteen">
		
		<!-- <video class="video&#45;&#45;story" autoplay muted loop playsinline preload="auto"> -->
		<!-- 	<source type="video/mp4" src="/wp&#45;content/uploads/story2.mov"></source> -->
		<!-- </video> -->
	
			<?php if ( $image1 && $image2 && $image3 ) {

					echo wp_get_attachment_image( $image1, 'instagram', false, array('class' => 'img--ratio ') );
					echo wp_get_attachment_image( $image2, 'instagram', false, array('class' => 'img--ratio') );
					echo wp_get_attachment_image( $image3, 'instagram', false, array('class' => 'img--ratio') );
		} ?>

	</div>
</div>
