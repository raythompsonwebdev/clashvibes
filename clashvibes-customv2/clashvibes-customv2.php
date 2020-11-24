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

 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CVWD_VERSION', '1.0.0' );
define( 'CVWDDOMAIN', 'clashvibes' );
define( 'CVWDPATH', get_stylesheet_directory() . '/clashvibes-customv2/' );

require_once CVWDPATH . '/post-types/register-audio.php';
// Audio Custom Post.
add_action( 'init', 'clashvibes_audio_custom_post_type', 0 );

require_once CVWDPATH . '/post-types/register-video.php';
// Video Custom Post.
add_action( 'init', 'clashvibes_video_custom_post_type', 0 );

require_once CVWDPATH . '/taxonomies/register-audio.php';
// Audio Taxonomy.
add_action( 'init', 'clashvibes_taxonomies_product', 0 );

require_once CVWDPATH . '/taxonomies/register-video.php';
// Video Taxonomy.
add_action( 'init', 'clashvibes_taxonomies_product', 0 );

/**
 *  Flush rewrite rules to add "project" as a permalink slug.
 */
function clashvibes_rewrite_flush() {
	clashvibes_register_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'clashvibes_rewrite_flush' );

/**
 *  Taxonomies
 */
function clashvibes_taxonomies_product() {

  //video
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
    'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'      => array(
			'slug'       => 'video-category', // This controls the base slug that will display before each term.
			'with_front' => false, // Don't display the category base before.
		),

	);
  register_taxonomy( 'video-category', 'clash-videos', $args );

  //audio
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
    'show_ui'           => true,
		'show_admin_column' => true,
		'rewrite'      => array(
			'slug'       => 'audio-category', // This controls the base slug that will display before each term.
			'with_front' => false, // Don't display the category base before.
		),
	);
	register_taxonomy( 'audio-category', 'clash-audio', $args );
}
add_action( 'init', 'clashvibes_taxonomies_product', 0 );


/**
 * Add video meta box.
 */
function add_video_clashes_metaboxes() {
	add_meta_box(
    'video_clash_details',
    esc_html__( 'Video Clash Details', 'clashvibes' ),
    'clashvibes_meta_box_fields',
    'clash-videos',
    'normal',
    'default'
  );
}
add_action( 'add_meta_boxes', 'add_video_clashes_metaboxes' );

//video
add_action( 'load-post.php', 'add_video_clashes_metaboxes' );
add_action( 'load-post-new.php', 'add_video_clashes_metaboxes' );


/**
 * Add audio meta box.
 */
function add_audio_clashes_metaboxes() {

	add_meta_box(
    'audio_clash_details',
    esc_html__( 'Audio Clash Details', 'clashvibes' ),
    'clashvibes_meta_box_fields',
    'clash-audio',
    'normal',
    'default'
  );
}
add_action( 'add_meta_boxes', 'add_audio_clashes_metaboxes' );

 //audio
add_action( 'load-post.php', 'add_audio_clashes_metaboxes' );
add_action( 'load-post-new.php', 'add_audio_clashes_metaboxes' );


 /**
 *
 *  Display Metabox.
 *
 *  @param post $post post object.
 */
function clashvibes_meta_box_fields( $post ) {

  $clashvibes_stored_meta = get_post_meta( $post->ID);

  //add nonce field
  wp_nonce_field( basename( __FILE__ ), 'clashvibes_meta_box_nonce' );

	?>
    <!--display mark up for metabox-->
    <h1>Sound System Details</h1>
    <p>
      <label for="sound_system_name">Sound System Name:</label>
      <br />
        <input size="45" id="sound_system_name" name="sound_system_name"  value="
          <?php
            if ( ! empty( $clashvibes_stored_meta['sound_system_name'] ) ) :
              echo esc_attr( $clashvibes_stored_meta['sound_system_name'][0] );
            endif;
          ?>"
        />
    </p>

    <p>
      <label for="sound_clash_year">Sound Class Year:</label>
      <br />
      <input size="45" id="sound_clash_year" name="sound_clash_year" value="
        <?php
          if ( ! empty( $clashvibes_stored_meta['sound_clash_year'] ) ) :
            echo esc_attr( $clashvibes_stored_meta['sound_clash_year'][0] );
          endif;
        ?>"
      />
    </p>

    <p>
      <label for="sound_clash_location">Sound Clash Location:</label>
      <br />
        <input size="45" id="sound_clash_location" name="sound_clash_location" value="
          <?php
            if ( ! empty( $clashvibes_stored_meta['sound_clash_location'] ) ) :
              echo esc_attr( $clashvibes_stored_meta['sound_clash_location'][0] );
            endif;
          ?>"
        />
    </p>

    <p>
      <label for="sound_system_url">URL:</label>
      <br />
        <input size="45" id="sound_system_url" name="sound_system_url" value="
          <?php
            if ( ! empty( $clashvibes_stored_meta['sound_system_url'] ) ) :
              echo esc_attr( $clashvibes_stored_meta['sound_system_url'][0] );
            endif;
          ?>"
        />
    </p>

  <?php
}

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

  $is_valid_nonce =  ( isset( $_POST['clashvibes_meta_box_nonce'] ) && wp_verify_nonce( $_POST['clashvibes_meta_box_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status.
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
  }

  if ( isset( $_POST['sound_system_name'] ) ) {

		update_post_meta(
			$post_id,                                            // Post ID
			'sound_system_name',                                // Meta key
			sanitize_text_field( $_POST[ 'sound_system_name' ] ) // Meta value
		);

	}

	if ( isset( $_POST['sound_clash_year'] ) ) {

		update_post_meta(
      $post_id,
      'sound_clash_year',
      sanitize_text_field( $_POST['sound_clash_year'] )
    );
	}

	if ( isset( $_POST['sound_clash_location'] ) ) {

		update_post_meta(
      $post_id,
      'sound_clash_location',
      sanitize_text_field( $_POST['sound_clash_location'] )
    );
	}

	if ( isset( $_POST['sound_system_url'] ) ) {

		update_post_meta(
      $post_id,
      'sound_system_url',
      sanitize_text_field( $_POST['sound_system_url'] )
    );
	}

}
add_action( 'save_post', 'clashvibes_meta_save' );




