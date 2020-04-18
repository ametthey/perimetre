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
?>
<!-- PERFECT ONE | 5:4 -->
<div class="slide">
	<div class="project__container__one">
		<!-- 16:9 -->

		<?php if ( $image  ) {
			echo wp_get_attachment_image( $image, 'presentation', false, array( 'class' => 'img--alternative' ) );
			}
		?>
	</div>
</div>
