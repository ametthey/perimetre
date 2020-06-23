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
            <title><?php wp_title('the title'); ?></title>
            <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

        <!-- right arrow -->
        <svg id="custom-cursor" width="80" height="67.164">
            <defs>
                <style>
                    .a{
                        fill:none;
                        stroke:#fff;
                        stroke-width:4px
                    }
                </style>
            </defs>

            <path class="a" d="M85.425 1.414l32.168 32.168L85.425 65.75M117.593 33.582H-.001"/>
        </svg>


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
                    <h2><?php echo get_field('header_presentation', 'option'); ?></h2>

                </div>
                <div class="menu__about__contact">
                    <h5><?php echo get_field('header_contact', 'option'); ?></h5>

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
                        <?php if ( get_field('header_portfolio', 'option') ):?>
                        <a class="about__link" href="<?php the_field('header_portfolio', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">download portfolio</a>
                        <?php endif; ?>

                        <?php if ( get_field('header_newsletter', 'option') ): ?>
                        <a class="about__link" href="<?php the_field('header_newsletter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">newsletter</a>
                        <?php endif; ?>
                    </div>

                    <br>

                    <!-- social media -->
                    <div class="socials__links__container">
                        <?php if ( get_field('header_facebook', 'option') ): ?>
                        <a href="<?php the_field('header_facebook', 'option'); ?>" target="_blank">facebook</a>
                        <?php endif; ?>
                        <?php if ( get_field('header_instagram', 'option') ): ?>
                        <a href="<?php the_field('header_instagram', 'option'); ?>" target="_blank">instagram</a>
                        <?php endif; ?>
                        <?php if ( get_field('header_linkedin', 'option') ): ?>
                        <a href="<?php the_field('header_linkedin', 'option'); ?>" target="_blank">linkedin</a>
                        <?php endif; ?>
                    </div>
                    <br>

                    <!-- credits -->
                    <p>
                        perimetre ©2002
                        <br>
                        development, design and content<br>
                        by périmètre.studio
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

<div class="menu__project__item" data-fx="14">
    <a href="<?php the_permalink(); ?>" class="lazyload" data-img="<?php the_post_thumbnail_url('project_hover'); ?>">
        <h1><?php the_title(); ?></h1>
    </a>
    <h4>
<?php
$terms = get_the_terms( $post->ID , 'project_type', array('number' => 3) );
foreach ( $terms as $term ) {
    echo '<span class="menu__project__item__category">'. $term->name . '</span><span>-</span>';
}
?>

    </h4>
</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>
            </div>

            <div class="site swiper-container transition-fade" id="swup">
