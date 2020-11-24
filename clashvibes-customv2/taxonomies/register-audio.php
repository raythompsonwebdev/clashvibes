<?php
/**
 * *PHP version 7
 *
 * Audio Plugin Taxonomy | registeraudio.php.
 *
 * @category   Audio plugin taxonomy
 * @package    Clashvibes
 * @subpackage Audio plugin taxonomy
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

/**
 *  Taxonomies
 */
function clashvibes_register_taxonomies_audio() {

	$labels = array(
		'name'              => _x( 'Audio Categories', 'taxonomy general name', 'clashvibes' ),
		'singular_name'     => _x( 'Audio Category', 'taxonomy singular name', 'clashvibes' ),
		'search_items'      => __( 'Search Audio Categories', 'clashvibes' ),
		'all_items'         => __( 'All Audio Categories', 'clashvibes' ),
		'parent_item'       => __( 'Parent Audio Category' , 'clashvibes'),
		'parent_item_colon' => __( 'Parent Audio Category:', 'clashvibes' ),
		'edit_item'         => __( 'Edit Audio Category', 'clashvibes' ),
		'update_item'       => __( 'Update Audio Category', 'clashvibes' ),
		'add_new_item'      => __( 'Add New Audio Category' , 'clashvibes'),
		'new_item_name'     => __( 'New Audio Category', 'clashvibes' ),
		'menu_name'         => __( 'Audio Categories', 'clashvibes' ),
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
