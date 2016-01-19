<?php

add_action( 'init', 'wp_updater_post_types' );

function wp_updater_post_types(){

	///// POST TYPE : THEME /////
	$theme_labels = array(
		'name' => "Theme",
		'singular_name' => "Theme",
		'add_new' => 'New Theme',
		'add_new_item' => 'New Theme',
		'edit_item' => 'Edit Theme',
		'new_item' => 'New Theme',
		'all_items' => 'All Themes',
		'view_item' => 'View Theme',
		'search_items' => 'Search Theme',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'No Themes found in Trash', 
		'parent_item_colon' => '',
		'menu_name' => 'Theme'
	);
	
	$theme_vars = array(
		'labels' => $theme_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'theme' ),
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 7,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
		'taxonomies' => array(),
		'menu_icon' => '',
	);
	register_post_type( 'theme', $theme_vars );


	///// POST TYPE : THEME /////
	$theme_labels = array(
		'name' => "Theme Version",
		'singular_name' => "Theme Version",
		'add_new' => 'New Theme Version',
		'add_new_item' => 'New Theme Version',
		'edit_item' => 'Edit Theme Version',
		'new_item' => 'New Theme Version',
		'all_items' => 'All Theme Versions',
		'view_item' => 'View Theme  Version',
		'search_items' => 'Search Theme Versions',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'No Theme Versions found in Trash', 
		'parent_item_colon' => '',
		'menu_name' => 'Theme Versions'
	);
	
	$theme_vars = array(
		'labels' => $theme_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'theme-version' ),
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 7,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
		'taxonomies' => array(),
		'menu_icon' => 'dashicons-album',
	);
	register_post_type( 'theme_version', $theme_vars );


}