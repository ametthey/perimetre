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
        <header>
            <h4 class="header__title" id="projects">
                project
            </h4>

            <h4 class="header__title"><a href="<?php echo get_home_url(); ?>">Périmètre</a></h4>

            <h4 class="header__title" id="about">
                about
            </h4>
        </header>

        <?php get_template_part('template-parts/header/header', 'about');?>

        <?php get_template_part('template-parts/header/header', 'projects'); ?>


