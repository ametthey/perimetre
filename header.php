<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--
	____ ______ ____ ____ __ ___ ______ ______ ____ ______
	/ __ \ / ____/ / __ \ / _/ / |/ / / ____/ /_ __/ / __ \ / ____/
	/ /_/ / / __/ / /_/ / / / / /|_/ / / __/ / / / /_/ / / __/
	/ ____/ / /___ / _, _/ _/ / / / / / / /___ / / / _, _/ / /___
	/_/ /_____/ /_/ |_| /___/ /_/ /_/ /_____/ /_/ /_/ |_| /_____/

	_____ ______ __ __ ____ ____ ____
	/ ___/ /_ __/ / / / / / __ \ / _/ / __ \
	\__ \ / / / / / / / / / / / / / / / /
	___/ / / / / /_/ / / /_/ / _/ / / /_/ /
	/____/ /_/ \____/ /_____/ /___/ \____/

	Find us at perimetre.studio !  -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
	<body <?php body_class() ?> >

<header>
	<h4 class="header__title" id="projects">
		Project
	</h4>

	<h4 class="header__title"><a href="<?php echo get_home_url(); ?>">Périmètre</a></h4>

	<h4 class="header__title" id="about">
		About
	</h4>
</header>	

<div class="menu__about">

	<div class="menu__about__presentation">
		<h2>Périmètre est un studio de création et de direction artistique basé à Paris. 
			<br>
			<br>
			Périmètre fonctionne comme un collectif d’artistes, reposant sur la collaboration avec un large réseau de créatifs spécialisés dans différents domaines : graphisme, vidéo, photographie, motion design, scénographie, musique.
		</h2>

	</div>
	<div class="menu__about__contact">
		<h5>We’re always looking for new collaborations and profile. If you’re interested in applying for and internf you’re interested in applying for an internship, the team would like to hear from you at internship [at] glgth.com. Please include your portfolio in PDF format. The studio accepts student interns year-round.
		</h5>

		<!-- separator -->
		<div class="separator"></div>


		<!-- contact -->
		<i>contact</i><br>
		<h5>
			<b>
				<a href="mailto:bonjour@perimetre.studio">
					bonjour@perimetre.studio
				</a>
			</b>
		</h5>

		<!-- albin -->
		<i>albin</i>
		<br>
		<h5>
			<b>
			<a href="mailto:albin@perimetre.studio">
				Albin@perimetre.studio
			</a>
			</b><br>
			<b>
				<a href="tel:0033782973054">
					+33 (7) 82 97 30 54
				</a>
			</b>
		</h5>

		<!-- hugo -->
		<i>hugo</i>
		<br>
		<h5>
			<b>
				<a href="mailto:hugo@perimetre.studio">
					hugo@perimetre.studio
				</a>
			</b><br>
			<b>
				<a href="tel:0033669614033">
					+33 (6) 69 61 40 33
				</a>
			</b>
		</h5>

		<!-- camille -->
		<i>camille</i>
		<br>
		<h5>
			<b>
				<a href="mailto:camille@perimetre.studio">
					camille@perimetre.studio
				</a>
			</b><br>
			<b>
				<a href="tel:0033669614033">
					+33 (6) 69 61 40 33
				</a>
			</b>
		</h5>

		<!-- adresse -->
		<i>adress</i>
		<br>
		<h5>
			<b>
				74 rue des martyrs 75018 – Paris
			</b>
		</h5>
		<br>

		<div class="about__links__container">
			<a class="about__link" href=""><img src="wp-content/themes/perimetre2020/dist/assets/images/arrow_right.svg" alt="">download portfolio</a>
			<a class="about__link" href="">newsletter</a>
		</div>

		<br>

		<!-- social media -->
		<div class="socials__links__container">
			<a href="#">facebook</a>
			<a href="#">instagram</a>
			<a href="#">linkedin</a>
		</div>
		<br>

		<!-- credits -->
		<p>
			perimetre ©2002
		</p>

	</div>

</div>
<div class="menu__projects">

							<?php 
		$project = new WP_Query(
			array(
				'post_type'		=> 'project',
				'post_status'	=> 'publish',
				'posts_per_page'=> -1,
				'order'			=> 'ASC'
			)
		);
	?>

	<?php if ( $project->have_posts() ) : ?>	

		<?php while ( $project->have_posts() ) : $project->the_post(); ?>

			<div class="menu__project__item" data-fx="14"_url>
				<a href="<?php the_permalink(); ?>" class="lazyload" data-img="<?php the_post_thumbnail_url('thumbnail'); ?>">
					<h1><?php the_title(); ?></h1>
					<h4><?php the_terms( get_the_ID() , 'project_type' ); ?></h4>
				</a>
			</div>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>
</div>

