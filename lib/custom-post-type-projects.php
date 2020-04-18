<?php

/*
 * Custom Post Type for Projets
 *
 * Custom post type with Page Capability Type, this
 * custom post type is for Projects Items
 *
 * @use Generators Wordpress Custom Post Type from wp-hasty https://www.wp-hasty.com/tools/wordpress-custom-post-type-generator/
 *
 **/

function perimetre2020_project_custom_post_type() {
	$labels = array(
		'name' => _x( 'projects', 'Post Type General Name', 'perimetre2020' ),
		'singular_name' => _x( 'project', 'Post Type Singular Name', 'perimetre2020' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'perimetre2020' ),
		'name_admin_bar' => _x( 'project', 'Add New on Toolbar', 'perimetre2020' ),
		'archives' => __( 'Archives project', 'perimetre2020' ),
		'attributes' => __( 'Attributs project', 'perimetre2020' ),
		'parent_item_colon' => __( 'Parents project:', 'perimetre2020' ),
		'all_items' => __( 'Tous les Projects', 'perimetre2020' ),
		'add_new_item' => __( 'Ajouter nouveau project', 'perimetre2020' ),
		'add_new' => __( 'Ajouter', 'perimetre2020' ),
		'new_item' => __( 'Nouveau project', 'perimetre2020' ),
		'edit_item' => __( 'Modifier le Project', 'perimetre2020' ),
		'update_item' => __( 'Mettre à jour le Project', 'perimetre2020' ),
		'view_item' => __( 'Voir Project', 'perimetre2020' ),
		'view_items' => __( 'Voir Projects', 'perimetre2020' ),
		'search_items' => __( 'Rechercher dans les Projects', 'perimetre2020' ),
		'not_found' => __( 'Aucun project trouvé.', 'perimetre2020' ),
		'not_found_in_trash' => __( 'Aucun project trouvé dans la corbeille.', 'perimetre2020' ),
		'featured_image' => __( 'Image mise en avant', 'perimetre2020' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'perimetre2020' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'perimetre2020' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'perimetre2020' ),
		'insert_into_item' => __( 'Insérer dans project', 'perimetre2020' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet project', 'perimetre2020' ),
		'items_list' => __( 'Liste projects', 'perimetre2020' ),
		'items_list_navigation' => __( 'Navigation de la liste projects', 'perimetre2020' ),
		'filter_items_list' => __( 'Filtrer la liste projects', 'perimetre2020' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'page-attributes', 'custom-fields', ),
		'show_in_rest' => true,

	);
	register_post_type( 'project', $args );
}

add_action( 'init', 'perimetre2020_project_custom_post_type' );

function project_type_tax() {
	$labels = array(
		'name'              => _x( 'Custom Taxonomies', 'project_type general name', 'textdomain' ),
		'singular_name'     => _x( 'Type du projet', 'project_type singular name', 'textdomain' ),
		'search_items'      => __( 'Search Custom Taxonomies', 'textdomain' ),
		'all_items'         => __( 'All Custom Taxonomies', 'textdomain' ),
		'parent_item'       => __( 'Parent project_type', 'textdomain' ),
		'parent_item_colon' => __( 'Parent project_type:', 'textdomain' ),
		'edit_item'         => __( 'Edit project_type', 'textdomain' ),
		'update_item'       => __( 'Update project_type', 'textdomain' ),
		'add_new_item'      => __( 'Ajouter la catégorie du projet', 'textdomain' ),
		'new_item_name'     => __( 'New project_type Name', 'textdomain' ),
		'menu_name'         => __( 'Catégorie du projet', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_admin_column' => true,
		'show_in_rest' => true
	);
	register_taxonomy('project_type', ['project'], $args);
}

add_action( 'init', 'project_type_tax' );

