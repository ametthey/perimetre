<?php

/**
 *  Introduction Project Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'introduction-project';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'introduction-project';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('project_image');
$video = get_field('project_video');
$size = 'presentation';
$title = get_field('project_title');
$description = get_field('project_description');
$client = get_field('project_client');
$categorie = get_field('project_categorie');
$annee = get_field('project_annee');
?>
	<!-- INTRODUCTION -->
	<div id="<?php echo $id; ?>" class="slide">
	<div class="project__presentation">
		<!-- TEXTE -->
		<div class="project__presentation__texte">
			<div class="presentation__texte__wrapper__summary">
			<h2><?php echo $title; ?></h2>
			<h4><?php echo $description; ?></h4>
			</div>

			<div class="presentation__texte__wrapper__information">
				<div class="separator"></div>
				<div class="presentation__texte__item__information presentation__texte__item--client">
					<p><i>Client</i></p>
					<h5><b><?php echo $client; ?></b></h5>
				</div>
				<div class="presentation__texte__item__information presentation__texte__item--year">
					<p><i>Year</i></p>
					<h5><b><?php echo $annee; ?></b></h5>
				</div>
				<div class="presentation__texte__item__information presentation__texte__item--categorie">
					<p><i>catégorie</i></p>
					<h5><b><?php echo $categorie; ?></b></h5>
				</div>
			</div>
		</div>


		<!-- IMAGE -->
		<div class="project__presentation__image">
			<div class="outer">
				<div class="inner">
					<?php if( $video ) { ?>
						<video class="video--cinema" autoplay muted loop playsinline preload="auto">
							<source type="video/mp4" src="<?php echo $video; ?>"></source>
						</video>

					<?php } else { ?>
						<?php $image = get_field('project_image'); ?>

							<?php if( !empty($image) ): ?>
									<?php echo wp_get_attachment_image($image, 'presentation', false,  array( 'class' => 'img--ratio' )); ?>
								<?php endif; ?>

						<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
