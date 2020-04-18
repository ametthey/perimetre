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
<!-- COMPOSITION WITH THREE IMAGES  -->
<div class="slide">
	<div class="project__container_three_mix_sixteen_nine">
		<!-- left container -->
		<div class="container left">
		
			<div class="outer_quatre_cinq">
				<div class="inner">

					<?php if ( $image1  ) {
						echo wp_get_attachment_image( $image1, 'presentation', false, array( 'class' => 'img--alternative' ) );
							}
					?>

				</div>
			</div>

		</div>	

		<!-- right container -->
		<div class="container right">

			<!-- top right item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
					<?php if ( $image2  ) {
						echo wp_get_attachment_image( $image2, 'presentation', false, array( 'class' => 'img--alternative' ) );
							}
					?>
				</div>
			</div>

			<!-- bottom right item -->
			<div class="outer_sixteen_nine">
				<div class="inner">
					<?php if ( $image3  ) {
						echo wp_get_attachment_image( $image3, 'presentation', false, array( 'class' => 'img--alternative') );
							}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
