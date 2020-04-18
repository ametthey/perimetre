<?php

/**
 * Credit Project Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'presentation-projet-' . $block['id'];
// $id = 'credit-projet';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'credit-projet';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('credit_image');
$creditor = get_field('credit_person');
?>
<!-- CREDIT -->
<div id="<?php echo esc_attr($id); ?>" class="slide">
	<div class="project__credit">
		<!-- IMAGE -->
		<div class="project__credit__image">
			<div class="outer">
				<div class="inner">
					<?php
						$image = get_field('credit_image');
						$size = 'presentation';

						if( $image ) {
							echo wp_get_attachment_image($image, 'presentation', false,  array( 'class' => 'img--ratio' ));
						}
					?>

				</div>
			</div>
		</div>

		<!-- TEXTE -->
		<div class="project__credit__texte">

			<div class="credit__texte__wrapper__information">
				<p><i>CREDITS</i></p>
				<div class="separator"></div>
					<div class="creditor">
						<h5><?php echo $creditor; ?></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
