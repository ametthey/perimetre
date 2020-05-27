<?php

/*
 * Advanced Custom Field : Block
 *
 **/

function _themename_register_acf_block_types() {

    //HOME PAGE : presentation project
    acf_register_block_type(
        array(
            'name'              => 'Presentation',
            'title'             => __('Home - Présentation du projet'),
            'description'       => __('La présentation en bref d\'un projet'),
            'render_template'   => '/template-parts/home/presentation-project.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE : introduction
    acf_register_block_type(
        array(
            'name'              => 'Introduction',
            'title'             => __('Introduction Project'),
            'description'       => __('Slide d\'introduction pour les pages projets'),
            'render_template'   => '/template-parts/project/mandatory/project-introduction.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE : 4 X 1:1
    acf_register_block_type(
        array(
            'name'              => 'quatre carre',
            'title'             => __('4 images - 1:1'),
            'description'       => __('Composition d\'images avec 4 images en format 1:1'),
            'render_template'   => '/template-parts/project/project-four_one-one.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE : 4 X 16:9
    acf_register_block_type(
        array(
            'name'              => 'quatre carre two',
            'title'             => __('4 images - 16:9'),
            'description'       => __('Composition d\'images avec 4 images en format 16:9'),
            'render_template'   => '/template-parts/project/project-four_sixteen-nine.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE : fullscreen
    acf_register_block_type(
        array(
            'name'              => 'fullscreen',
            'title'             => __('Fullscreen'),
            'description'       => __('Composition avec une image en 16:9 Fullscreen'),
            'render_template'   => '/template-parts/project/project-fullscreen.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE :  one
    acf_register_block_type(
        array(
            'name'              => 'perfect one',
            'title'             => __('1 image'),
            'description'       => __('Composition avec une image'),
            'render_template'   => '/template-parts/project/project-one_five-four.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE :  three with instagram story format
    acf_register_block_type(
        array(
            'name'              => 'mix',
            'title'             => __('3 images - Mix'),
            'description'       => __('Composition avec 3 images, à gauche une en 4:5 et à droite 2 en 16:9'),
            'render_template'   => '/template-parts/project/project-three_mix.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE :  three with instagram story format
    acf_register_block_type(
        array(
            'name'              => 'instagram',
            'title'             => __('3 images - 9:16'),
            'description'       => __('Composition avec 3 images en format instagram'),
            'render_template'   => '/template-parts/project/project-three_nine-sixteen.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE :  Two with five-four
    acf_register_block_type(
        array(
            'name'              => 'two_five_four',
            'title'             => __('2 images - 5:4'),
            'description'       => __('Composition avec 2 images en format 5:4'),
            'render_template'   => '/template-parts/project/project-two_five-four.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    //PROJECT PAGE :  Two with 16:9 + 4:5
    acf_register_block_type(
        array(
            'name'              => 'two',
            'title'             => __('2 images - Mix '),
            'description'       => __('Composition avec 2 images en format 16:9 + 4:5'),
            'render_template'   => '/template-parts/project/project-two_mix-alternative.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    // PROJECT PAGE : Two with 1:1 + 1:1
    acf_register_block_type(
        array(
            'name'              => 'two_one_one',
            'title'             => __('2 images - square'),
            'description'       => __('Composition avec 2 images en format carré'),
            'render_template'   => '/template-parts/project/project-two-square.php',
            'category'          => 'category',
            'icon'              => 'category',
            'keywords'          => array( 'test', 'quote' ),
        )
    );
    // PROJECT PAGE : CREDIT
    acf_register_block_type(
        array(
            'name'              => 'credit',
            'title'             => __('Crédits pour le projet'),
            'description'       => __('slide pour ajouter les creédits du projet'),
            'render_template'   => '/template-parts/project/mandatory/project-credit.php',
            'category'          => 'perimetre',
            'icon'              => 'category',
            'keywords'          => array( 'credit', 'creditProject' ),
        )
    );

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', '_themename_register_acf_block_types');
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header About Settings',
        'menu_title'	=> 'Header: About',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

// add a category for perimetre blocks
add_filter('block_categories', function($categories) {
    $categories[] = [
        'slug'  =>  'perimetre',
        'title' =>  'Perimetre',
        'icon'  => null
    ];
    return $categories;

});
