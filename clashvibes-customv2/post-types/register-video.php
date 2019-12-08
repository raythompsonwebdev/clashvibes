<?php

/**
 * Creating a function to create our CPT.
 */
function clashvibes_custom_post_video() {

	/**
	 * 'menu_icon'   => get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
	 * 'menu_icon' => 'dashicons-download',
	 */

	// Set UI labels for Video Custom Post Type.
	$labels = array(
		'name'                  => _x( 'Sound Clash Video', 'Post Type General Name', 'CLVBDOMAIN' ),
		'singular_name'         => _x( 'Sound Clash Video', 'Post Type Singular Name', 'CLVBDOMAIN' ),
		'menu_name'             => __( 'Sound Clash Video', 'CLVBDOMAIN' ),
		'name_admin_bar'        => __( 'Sound Clash Video', 'CLVBDOMAIN' ),
		'parent_item_colon'     => __( 'Parent Sound Clash Video', 'CLVBDOMAIN' ),
		'all_items'             => __( 'Sound Clash Video', 'CLVBDOMAIN' ),
		'view_item'             => __( 'View Sound Clash Video', 'CLVBDOMAIN' ),
		'add_new_item'          => __( 'Add New Sound Clash Video', 'CLVBDOMAIN' ),
		'add_new'               => __( 'Add Sound Clash Video', 'CLVBDOMAIN' ),
		'edit_item'             => __( 'Edit Sound Clash Video', 'CLVBDOMAIN' ),
		'update_item'           => __( 'Update Sound Clash Video', 'CLVBDOMAIN' ),
		'search_items'          => __( 'Search Sound Clash Video', 'CLVBDOMAIN' ),
		'not_found'             => __( 'Not Found', 'CLVBDOMAIN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'CLVBDOMAIN' ),
		'featured_image'        => __( 'Featured Image', 'CLVBDOMAIN' ),
		'set_featured_image'    => __( 'Set featured image', 'CLVBDOMAIN' ),
		'remove_featured_image' => __( 'Remove featured image', 'CLVBDOMAIN' ),
		'use_featured_image'    => __( 'Use as featured image', 'CLVBDOMAIN' ),
	);

	// Set other options for Video Custom Post Type.
	$args = array(
		'label'                => __( 'Sound Clash Video', 'CLVBDOMAIN' ),
		'description'          => __( 'Sound Clash Video news and reviews', 'CLVBDOMAIN' ),
		'labels'               => $labels,
		// Features this CPT supports in Post Editor.
		'supports'             => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'           => array( 'video-category', 'post_tag' ),
		/**
		* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*
		* 'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
		*/
		'register_meta_box_cb' => 'add_video_clashes_metaboxes',
		'hierarchical'         => false,
		'public'               => true,
		'show_ui'              => true,
		'show_in_menu'         => true,
		'show_in_nav_menus'    => true,
		'show_in_admin_bar'    => true,
		'menu_position'        => 5,
		'query_var'            => true,
		'can_export'           => true,
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post',
	);

	// Registering Video Custom Post Type.
	register_post_type( 'clash-videos', $args );

	
}
