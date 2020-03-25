<?php
/**
 * *PHP version 7
 *
 * Video Plugin | registervideo.php.
 *
 * @category   Audio Plugin
 * @package    Clashvibes
 * @subpackage Audio Plugin
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

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
		'name'                  => _x( 'Sound Clash Video', 'Post Type General Name', 'clashvibes' ),
		'singular_name'         => _x( 'Sound Clash Video', 'Post Type Singular Name', 'clashvibes' ),
		'menu_name'             => __( 'Sound Clash Video', 'clashvibes' ),
		'name_admin_bar'        => __( 'Sound Clash Video', 'clashvibes' ),
		'parent_item_colon'     => __( 'Parent Sound Clash Video', 'clashvibes' ),
		'all_items'             => __( 'Sound Clash Video', 'clashvibes' ),
		'view_item'             => __( 'View Sound Clash Video', 'clashvibes' ),
		'add_new_item'          => __( 'Add New Sound Clash Video', 'clashvibes' ),
		'add_new'               => __( 'Add Sound Clash Video', 'clashvibes' ),
		'edit_item'             => __( 'Edit Sound Clash Video', 'clashvibes' ),
		'update_item'           => __( 'Update Sound Clash Video', 'clashvibes' ),
		'search_items'          => __( 'Search Sound Clash Video', 'clashvibes' ),
		'not_found'             => __( 'Not Found', 'clashvibes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'clashvibes' ),
		'featured_image'        => __( 'Featured Image', 'clashvibes' ),
		'set_featured_image'    => __( 'Set featured image', 'clashvibes' ),
		'remove_featured_image' => __( 'Remove featured image', 'clashvibes' ),
		'use_featured_image'    => __( 'Use as featured image', 'clashvibes' ),
	);

	// Set other options for Video Custom Post Type.
	$args = array(
		'label'                => __( 'Sound Clash Video', 'clashvibes' ),
		'description'          => __( 'Sound Clash Video news and reviews', 'clashvibes' ),
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
		'has_archive'          => false,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post',
	);

	// Registering Video Custom Post Type.
	register_post_type( 'clash-videos', $args );

}