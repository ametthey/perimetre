
<div class="menu__about">



    <div class="menu__about__presentation">
        <!-- <h2 data&#45;fx="14">perimetre is a multidisciplinary creative studio. We conceive and produce content working in many fields including -->
        <!-- <a href="#" data&#45;img="/wp&#45;content/uploads/2020/06/perimetre_redbull&#45;1.jpg,/wp&#45;content/uploads/2020/06/perimetre&#45;futures&#45;carto&#45;4.jpg,/wp&#45;content/uploads/2020/06/perimetre&#45;futures&#45;carto&#45;3.jpg">art direction</a>, <a>strategy</a>, <a>graphic design</a>, <a>motion design</a>, <a>web development</a>, <a>3D</a>. Beyond that, our diverse collaborations always pushes us to experiment ne practices and techniques. That’s what truly drives us. </h2> -->
        <h4>Thanks to all the people we collaborated with : Oppo, Futur.e.s festival, Red Bull, Radio Nova, Subtyl, Eddy de Pretto, Cuniculaire, Orelsan x Damso, Converse, Havana Club, Ornement, Kekra, Corida, Yellam, Ditlef, Inspire, Poupie, Dior, Who’s Next, Archirêve, Rilesundayz, Paco Rabanne, Bureau Badass, Vice, Academia, Adidas, Zita…</h4>

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

        <!-- separator -->
        <div class="separator"></div>

        <div class="about__links__container">
            <?php if ( get_field('header_portfolio', 'option') ):?>
            <a class="about__link" href="<?php the_field('header_portfolio', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">download portfolio</a>
            <?php endif; ?>

            <?php if ( get_field('header_newsletter', 'option') ): ?>
            <a class="about__link" href="<?php the_field('header_newsletter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">newsletter</a>
            <?php endif; ?>

            <?php if ( get_field('header_facebook', 'option') ): ?>
            <a class="about__link" href="<?php the_field('header_facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">facebook</a>
            <?php endif; ?>

            <?php if ( get_field('header_instagram', 'option') ): ?>
            <a class="about__link" href="<?php the_field('header_instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">instagram</a>
            <?php endif; ?>

            <?php if ( get_field('header_linkedin', 'option') ): ?>
            <a class="about__link" href="<?php the_field('header_linkedin', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow_right.svg" alt="">linkedin</a>
            <?php endif; ?>
        </div>

        <!-- separator -->
        <div class="separator"></div>

        <!-- credits -->
        <div class="credits">
            <span>perimetre ©2020</span>
            <span>development, design and content</span>
            <span>by périmètre.studio</span>
        </div>
    </div>

</div>
