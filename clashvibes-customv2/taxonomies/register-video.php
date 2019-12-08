<?php

/**
 *  Taxonomies
 */
function clashvibes_register_taxonomies_video() {

	$labels = array(
		'name'              => _x( 'Video Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Video Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Video Categories' ),
		'all_items'         => __( 'All Video Categories' ),
		'parent_item'       => __( 'Parent Video Category' ),
		'parent_item_colon' => __( 'Parent Video Category:' ),
		'edit_item'         => __( 'Edit Video Category' ),
		'update_item'       => __( 'Update Video Category' ),
		'add_new_item'      => __( 'Add New Video Category' ),
		'new_item_name'     => __( 'New Video Category' ),
		'menu_name'         => __( 'Video Categories' ),
	);
	$args   = array(
		'labels'       => $labels,
		'hierarchical' => true,
		'query_var'    => true,
		'rewrite'      => array(
			'slug'       => 'video-category', // This controls the base slug that will display before each term.
			'with_front' => false, // Don't display the category base before.
		),

	);
	register_taxonomy( 'video-category', 'clash-videos', $args );
	
}