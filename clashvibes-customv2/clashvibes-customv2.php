<?php
/**
 * PHP version 7
 *
 * Plugin | clashvibes-customv2.php.
 *
 * @category   plugin 
 * @package    Clashvibes
 * @subpackage plugin 
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

/**
 * Creating a function to create our CPT.
 */
function clashvibes_custom_post_type() {

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
		'show_in_rest' 				 => true,
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

	// Set UI labels for Custom Post Type.
	/**
	 * 'menu_icon'  => get_stylesheet_directory_uri() . '/images/portfolio-icon.png',
	 * 'menu_icon' => 'dashicons-download',
	 */
	

	// Set UI labels for Audio Custom Post Type. 
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

	// Set other options for Audio Custom Post Type.
	$args = array(
		'label'                => __( 'Sound Clash Audio', 'clashvibes' ),
		'description'          => __( 'Sound Clash Audio news and reviews', 'clashvibes' ),
		'labels'               => $labels,
		// Features this CPT supports in Post Editor.
		'show_in_rest' 				 => true,
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
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'capability_type'      => 'post',
	);

	// Registering your Audio Custom Post Type.
	register_post_type( 'clash-audio', $args );
}

/**
* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'clashvibes_custom_post_type', 0 );


/**
 *  Taxonomies
 */
function clashvibes_taxonomies_product() {

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
add_action( 'init', 'clashvibes_taxonomies_product', 0 );

/**
 * Flush rewrite rules to add "review" as a permalink slug.
 */
function clashvibes_rewrite_flush() {
	clashvibes_custom_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'clashvibes_rewrite_flush' );

add_action( 'load-post.php', 'add_video_clashes_metaboxes' );
add_action( 'load-post-new.php', 'add_video_clashes_metaboxes' );
add_action( 'load-post.php', 'add_audio_clashes_metaboxes' );
add_action( 'load-post-new.php', 'add_audio_clashes_metaboxes' );



/**
 * Add video.
 */
function add_video_clashes_metaboxes() {
	add_meta_box( 'video_clash_details', esc_html__( 'Video Clash Details', 'clashvibes' ), 'sound_clash_fields', 'clash-videos', 'normal', 'default' );
}
// add video meta boxes.
add_action( 'add_meta_boxes', 'add_video_clashes_metaboxes' );


/**
 * Add audio.
 */
function add_audio_clashes_metaboxes() {
	add_meta_box( 'audio_clash_details', esc_html__( 'Audio Clash Details', 'clashvibes' ), 'sound_clash_fields', 'clash-audio', 'normal', 'default' );
}
// add audio meta boxes.
add_action( 'add_meta_boxes', 'add_audio_clashes_metaboxes' );

/**
 *
 *  Metabox fields.
 *
 *  @param post $post post object.
 */
function sound_clash_fields( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'sound_clash_nonce' );

	$dwwp_stored_meta = get_post_meta( $post->ID );

	?>

	<p><label>Sound Sytem Name:</label><br /><input size="45" name="sound_system_name"  value="
		<?php
		if ( ! empty( $dwwp_stored_meta['sound_system_name'] ) ) {
			echo esc_attr( $dwwp_stored_meta['sound_system_name'][0] );
		}
		?>
	" /></p>

	<p><label>Sound Class Year:</label><br /><input size="45" name="sound_clash_year" value="
		<?php
		if ( ! empty( $dwwp_stored_meta['sound_clash_year'] ) ) {
			echo esc_attr( $dwwp_stored_meta['sound_clash_year'][0] );
		}
		?>
	" /></p>

	<p><label>Sound Clash Location:</label><br /><input size="45" name="sound_clash_location" value=" 
		<?php
		if ( ! empty( $dwwp_stored_meta['sound_clash_location'] ) ) {
			echo esc_attr( $dwwp_stored_meta['sound_clash_location'][0] );
		}
		?>
	" /></p>

	<p><label>URL:</label><br /><input size="45" name="sound_system_url" value=" 
		<?php
		if ( ! empty( $dwwp_stored_meta['sound_system_url'] ) ) {
			echo esc_attr( $dwwp_stored_meta['sound_system_url'][0] );
		}
		?>
	" /></p>

<?php 
}

add_action( 'save_post', 'clashvibes_meta_save' );
add_action( 'publish_post', 'clashvibes_meta_save' );

/**
 *
 *  Save metabox attributes.
 *
 *  @param array $post_id post array field.
 */
function clashvibes_meta_save( $post_id ) {

	// Checks save status.
	$is_autosave = wp_is_post_autosave( $post_id );

	$is_revision = wp_is_post_revision( $post_id );

	$is_valid_nonce = ( isset( $_POST['sound_clash_nonce'] ) && wp_verify_nonce( $_POST['sound_clash_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false'; // input var okay; sanitization okay.

	// Exits script depending on save status.
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['sound_system_name'] ) ) {// input var okay; sanitization okay.

		update_post_meta( $post_id, 'sound_system_name', sanitize_text_field( $_POST['sound_system_name'] ) );// input var okay; sanitization okay.
	}

	if ( isset( $_POST['sound_clash_year'] ) ) {// input var okay; sanitization okay.

		update_post_meta( $post_id, 'sound_clash_year', sanitize_text_field( $_POST['sound_clash_year'] ) );// input var okay; sanitization okay.
	}

	if ( isset( $_POST['sound_clash_location'] ) ) {// input var okay; sanitization okay.

		update_post_meta( $post_id, 'sound_clash_location', sanitize_text_field( $_POST['sound_clash_location'] ) );// input var okay; sanitization okay.
	}

	if ( isset( $_POST['sound_system_url'] ) ) {// input var okay; sanitization okay.

		update_post_meta( $post_id, 'sound_system_url', sanitize_text_field( $_POST['sound_system_url'] ) );// input var okay; sanitization okay.
	}

}
add_action( 'save_post', 'clashvibes_meta_save' );


