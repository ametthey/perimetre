<?php

/**
 * Presentation Project Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
// $id = 'presentation-projet-' . $block['id'];
$id = 'presentation-projet';

if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'presentation-projet';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('home_image');
$video = get_field('home_video');
$title = get_field('home_title');
$description = get_field('home_description');
$client = get_field('home_client');
$categorie = get_field('home_categorie');
$annee = get_field('home_annee');
$link = get_field('home_link');
?>
	<!-- presentation project -->
	<div class="slide slide__project">
		<div class="section__presentation__project">
			<div class="presentation__project__image">
				<div class="outer">
					<div class="inner">
						<?php
							$image = get_field('home_image');
							$size = 'presentation';
						?>
                        <?php if( $video ) { ?>
                            <a href="<?php echo $link; ?>">
                                <video class="video--cinema" autoplay muted loop playsinline preload="auto">
                                    <source type="video/mp4" src="<?php echo $video; ?>"></source>
                                </video>
                            </a>
                        <?php } else { ?>

                            <a href="<?php echo $link; ?>">
                                <img src="<?php echo $image; ?>" class="img--ratio lazyload">
                            </a>

                        <?php } ?>
					</div>
				</div>
			</div>




			<div class="presentation__project__texte">
				<a href="<?php echo $link; ?>">
					<h1 class="big__title"><?php echo $title; ?></h1>
				</a>

				<h4><?php echo $description; ?></h4>

				<!-- CLIENT -->
				<div class="presentation__project__information">
					<p class="presentation__project__information__title">Client</p>
					<h5 class="presentation__project__information__element"><?php echo $client; ?></h5>
				</div>

				<!-- CATEGORIE -->
				<div class="presentation__project__information">
					<p class="presentation__project__information__title">Catégorie</p>
					<h5 class="presentation__project__information__element">
					<?php echo $categorie; ?>
					</h5>
				</div>

				<!-- YEAR -->
				<div class="presentation__project__information">
					<p class="presentation__project__information__title">Année</p>
					<h5 class="presentation__project__information__element"><?php echo $annee; ?></h5>
				</div>
			</div>
		</div>
	</div>


