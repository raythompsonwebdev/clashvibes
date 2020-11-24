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
function clashvibes_audio_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Sound Clash Audio', 'Post Type General Name', 'clashvibes' ),
		'singular_name'         => _x( 'Sound Clash Audio', 'Post Type Singular Name', 'clashvibes' ),
		'menu_name'             => __( 'Sound Clash Audio', 'clashvibes' ),
		'name_admin_bar'        => __( 'Sound Clash Audio', 'clashvibes' ),
		'parent_item_colon'     => __( 'Parent Sound Clash Audio', 'clashvibes' ),
		'all_items'             => __( 'Sound Clash Audio', 'clashvibes' ),
		'view_item'             => __( 'View Sound Clash Audio', 'clashvibes' ),
		'add_new_item'          => __( 'Add New Sound Clash Audio', 'clashvibes' ),
		'add_new'               => __( 'Add Sound Clash Audio', 'clashvibes' ),
		'edit_item'             => __( 'Edit Sound Clash Audio', 'clashvibes' ),
		'update_item'           => __( 'Update Sound Clash Audio', 'clashvibes' ),
		'search_items'          => __( 'Search Sound Clash Audio', 'clashvibes' ),
		'not_found'             => __( 'Not Found', 'clashvibes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'clashvibes' ),
		'featured_image'        => __( 'Featured Image', 'clashvibes' ),
		'set_featured_image'    => __( 'Set featured image', 'clashvibes' ),
		'remove_featured_image' => __( 'Remove featured image', 'clashvibes' ),
		'use_featured_image'    => __( 'Use as featured image', 'clashvibes' ),
	);

	$args = array(
		'label'                => __( 'Sound Clash Audio', 'clashvibes' ),
		'description'          => __( 'Sound Clash Audio news and reviews', 'clashvibes' ),
		'labels'               => $labels,
		'show_in_rest' 				 => true,
		'supports'             => array( 'title', 'editor', 'post-formats', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'taxonomies'           => array( 'audio-category', 'post_tag' ),
		/**
		 * A hierarchical CPT is like Pages and can have
		 * Parent and child items. A non-hierarchical CPT
		 * is like Posts.
		 *
		 */
    //'menu_icon'   => get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
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
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post',
	);

	// Registering your Audio Custom Post Type.
	register_post_type( 'clash-audio', $args );
}


