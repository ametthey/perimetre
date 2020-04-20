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

function _themename_project_custom_post_type() {
	$labels = array(
		'name' => _x( 'projects', 'Post Type General Name', '_themename' ),
		'singular_name' => _x( 'project', 'Post Type Singular Name', '_themename' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', '_themename' ),
		'name_admin_bar' => _x( 'project', 'Add New on Toolbar', '_themename' ),
		'archives' => __( 'Archives project', '_themename' ),
		'attributes' => __( 'Attributs project', '_themename' ),
		'parent_item_colon' => __( 'Parents project:', '_themename' ),
		'all_items' => __( 'Tous les Projects', '_themename' ),
		'add_new_item' => __( 'Ajouter nouveau project', '_themename' ),
		'add_new' => __( 'Ajouter', '_themename' ),
		'new_item' => __( 'Nouveau project', '_themename' ),
		'edit_item' => __( 'Modifier le Project', '_themename' ),
		'update_item' => __( 'Mettre à jour le Project', '_themename' ),
		'view_item' => __( 'Voir Project', '_themename' ),
		'view_items' => __( 'Voir Projects', '_themename' ),
		'search_items' => __( 'Rechercher dans les Projects', '_themename' ),
		'not_found' => __( 'Aucun project trouvé.', '_themename' ),
		'not_found_in_trash' => __( 'Aucun project trouvé dans la corbeille.', '_themename' ),
		'featured_image' => __( 'Image mise en avant', '_themename' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
		'insert_into_item' => __( 'Insérer dans project', '_themename' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet project', '_themename' ),
		'items_list' => __( 'Liste projects', '_themename' ),
		'items_list_navigation' => __( 'Navigation de la liste projects', '_themename' ),
		'filter_items_list' => __( 'Filtrer la liste projects', '_themename' ),
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

add_action( 'init', '_themename_project_custom_post_type' );

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

