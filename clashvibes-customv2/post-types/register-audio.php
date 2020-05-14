<?php
/**
 * *PHP version 7
 *
 * Audio Plugin | registeraudio.php.
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
function clashvibes_custom_post_audio() {

	// Set UI labels for Custom Post Type.
	/**
	 * 'menu_icon'  => get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
	 * 'menu_icon' => 'dashicons-download',
	 */

	// Set UI labels for Audio Custom Post Type.
	$labels = array(
		'name'                  => _x( 'Sound Clash Audio', 'Post Type General Name', 'CLVBDOMAIN' ),
		'singular_name'         => _x( 'Sound Clash Audio', 'Post Type Singular Name', 'CLVBDOMAIN' ),
		'menu_name'             => __( 'Sound Clash Audio', 'CLVBDOMAIN' ),
		'name_admin_bar'        => __( 'Sound Clash Audio', 'CLVBDOMAIN' ),
		'parent_item_colon'     => __( 'Parent Sound Clash Audio', 'CLVBDOMAIN' ),
		'all_items'             => __( 'Sound Clash Audio', 'CLVBDOMAIN' ),
		'view_item'             => __( 'View Sound Clash Audio', 'CLVBDOMAIN' ),
		'add_new_item'          => __( 'Add New Sound Clash Audio', 'CLVBDOMAIN' ),
		'add_new'               => __( 'Add Sound Clash Audio', 'CLVBDOMAIN' ),
		'edit_item'             => __( 'Edit Sound Clash Audio', 'CLVBDOMAIN' ),
		'update_item'           => __( 'Update Sound Clash Audio', 'CLVBDOMAIN' ),
		'search_items'          => __( 'Search Sound Clash Audio', 'CLVBDOMAIN' ),
		'not_found'             => __( 'Not Found', 'CLVBDOMAIN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'CLVBDOMAIN' ),
		'featured_image'        => __( 'Featured Image', 'CLVBDOMAIN' ),
		'set_featured_image'    => __( 'Set featured image', 'CLVBDOMAIN' ),
		'remove_featured_image' => __( 'Remove featured image', 'CLVBDOMAIN' ),
		'use_featured_image'    => __( 'Use as featured image', 'CLVBDOMAIN' ),
	);

	// Set other options for Audio Custom Post Type.
	$args = array(
		'label'                => __( 'Sound Clash Audio', 'CLVBDOMAIN' ),
		'description'          => __( 'Sound Clash Audio news and reviews', 'CLVBDOMAIN' ),
		'labels'               => $labels,
		'show_in_rest' 				 => true,	
		// Features this CPT supports in Post Editor.
		'supports'             => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'           => array( 'audio-category', 'post_tag' ),
		/**
		 * A hierarchical CPT is like Pages and can have
		 * Parent and child items. A non-hierarchical CPT
		 * is like Posts.
		 *
		 * 'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
		 */

		'register_meta_box_cb' => 'add_audio_clashes_metaboxes',
		'hierarchical'         => false,
		'public'               => true,		
		'show_ui'              => true,
		'show_in_menu'         => true,
		'show_in_nav_menus'    => true,
		'show_in_admin_bar'    => true,
		'menu_position'        => 5,
		'can_export'           => true,
		'query_var'            => true,
		'has_archive'          => false,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post',
	);

	// Registering your Audio Custom Post Type.
	register_post_type( 'clash-audio', $args );
}
