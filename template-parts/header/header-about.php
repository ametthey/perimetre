
<div class="menu__about">

    <div class="menu__about__presentation">
        <h2><?php echo get_field('header_presentation', 'option'); ?></h2>

    </div>
    <div class="menu__about__contact">
        <h5><?php echo get_field('header_contact', 'option'); ?></h5>

        <!-- separator -->
        <div class="separator"></div>


        <!-- contact -->
        <span>Contact</span>
        <h5>
            <a href="mailto:bonjour@perimetre.studio">
                bonjour@perimetre.studio
            </a>
        </h5>

        <!-- albin -->
        <span>Albin</span>
        <h5>
            <a href="mailto:albin@perimetre.studio">
                Albin@perimetre.studio
            </a>
            <a href="tel:0033782973054">
                +33 (7) 82 97 30 54
            </a>
        </h5>

        <!-- hugo -->
        <span>Hugo</span>
        <h5>
            <a href="mailto:hugo@perimetre.studio">
                hugo@perimetre.studio
            </a>
            <a href="tel:0033669614033">
                +33 (6) 69 61 40 33
            </a>
        </h5>

        <!-- camille -->
        <span>Camille</span>
        <h5>
            <a href="mailto:camille@perimetre.studio">
                camille@perimetre.studio
            </a>
            <a href="tel:0033669614033">
                +33 (6) 69 61 40 33
            </a>
        </h5>

        <!-- adresse -->
        <span>Adresse</span>
        <h5>
            74 rue des martyrs 75018 – Paris
        </h5>

        <div class="about__links__container">
            <?php if ( get_field('header_portfolio', 'option') ):?>
            <a class="about__link" href="<?php the_field('header_portfolio', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">download portfolio</a>
            <?php endif; ?>

            <?php if ( get_field('header_newsletter', 'option') ): ?>
            <a class="about__link" href="<?php the_field('header_newsletter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">newsletter</a>
            <?php endif; ?>
        </div>

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

        <!-- credits -->
        <div class="credits">
            <span>perimetre ©2020</span>
            <span>development, design and content</span>
            <span>by périmètre.studio</span>
        </div>
    </div>

</div>
