<?php
/**
 * Block template file: /template-parts/project/mandatory/project-credit_bis.php
 *
 * Credit Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'credit-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-credit';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<!-- CREDIT #2-->
<div class="slide swiper-slide">
	<div class="project__credit">
		<!-- IMAGE -->
		<div class="project__credit__image">
			<div class="outer">
				<div class="inner">
                    <?php $image = get_field( 'image' ); ?>
                    <?php $size = 'presentation'; ?>
                    <?php if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, $size , false, array( 'class' => 'img--ratio' )); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
		<!-- TEXTE -->
		<div class="project__credit__texte">

			<div class="credit__texte__wrapper__information">
				<p>CREDITS</p>
				<div class="separator"></div>
					<div class="creditor">
						<h5><?php the_field( 'credit' ); ?></h5>
					</div>
				</div>
			</div>
		</div>


</div>
