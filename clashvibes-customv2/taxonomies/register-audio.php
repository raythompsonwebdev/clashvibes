<?php

/**
 *  Taxonomies
 */
function clashvibes_register_taxonomies_audio() {

	$labels = array(
		'name'              => _x( 'Audio Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Audio Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Audio Categories' ),
		'all_items'         => __( 'All Audio Categories' ),
		'parent_item'       => __( 'Parent Audio Category' ),
		'parent_item_colon' => __( 'Parent Audio Category:' ),
		'edit_item'         => __( 'Edit Audio Category' ),
		'update_item'       => __( 'Update Audio Category' ),
		'add_new_item'      => __( 'Add New Audio Category' ),
		'new_item_name'     => __( 'New Audio Category' ),
		'menu_name'         => __( 'Audio Categories' ),
	);
	$args   = array(
		'labels'       => $labels,
		'hierarchical' => true,
		'query_var'    => true,
		'rewrite'      => array(
			'slug'       => 'audio-category', // This controls the base slug that will display before each term.
			'with_front' => false, // Don't display the category base before.
		),
	);
	register_taxonomy( 'audio-category', 'clash-audio', $args );
}