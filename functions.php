<?php
/**
 * *PHP version 5
 *
 * Functions | core/functions.php.
 *
 * @category   Functions
 * @package    Clashvibes
 * @subpackage Functions
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */


// theme set up.
if ( ! function_exists( 'clashvibes_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clashvibes_theme_setup() {

		add_theme_support( 'automatic-feed-links' );

		// add editor styles.
		add_editor_style( array( 'styles/custom-editor-style.css' ) );

		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/**
		 * Create new image sizes
		 */
		add_image_size( 'featured-image', 783, 9999 );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		*/
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		$args = array(
			'width'  => 325,
			'height' => 65,
		);
		add_theme_support( 'custom-header', $args );

		$defaults = array(
			'default-color'          => 'e9ad29',
			'default-image'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $defaults );

		$args = array(
			'default-image'          => '',
			'default-color'          => 'ffffff',
			'random-default'         => false,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'default-text-color'     => '',
			'header-text'            => true,
			'uploads'                => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',

		);
		  add_theme_support( 'nav-menus', $args );

		$links = array(
			'before'           => '<p>' . __( 'Pages:', 'clashvibes' ),
			'after'            => '</p>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page', 'clashvibes' ),
			'previouspagelink' => __( 'Previous page', 'clashvibes' ),
			'pagelink'         => '%',
			'echo'             => 1,
		);
		wp_link_pages( $links );
	}

endif; // my_theme_setup end.
add_action( 'after_setup_theme', 'clashvibes_theme_setup' );

/**
 * register menus
 */
function clashvibes_menu_function() {

	register_nav_menus(
		array(
			'main'      => esc_html__( 'Main Nav', 'clashvibes' ),
			'Secondary' => esc_html__( 'Secondary', 'clashvibes' ),
			'mobile'    => esc_html__( 'mobile', 'clashvibes' ),
			'Audio-Nav' => esc_html__( 'audio-nav', 'clashvibes' ),
			'Video-Nav' => esc_html__( 'video-nav', 'clashvibes' ),
		)
	);
}
add_action( 'after_setup_theme', 'clashvibes_menu_function' );

/**
 * Text domain
 */
function clashvibes_load_theme_textdomain() {

	load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'clashvibes_load_theme_textdomain' );

// remove version from head.
remove_action( 'wp_head', 'wp_generator' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clashvibes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clashvibes_content_width', 640 );
}
add_action( 'after_setup_theme', 'clashvibes_content_width', 0 );


/**
 *
 * Sidebars!
 * */
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'clashvibes' ),
			'id'            => 'primary-widget-area',
			'description'   => __( 'The primary widget area', 'clashvibes' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

/**
 *
 *  Audio area.
 */
function clashvibes_audio_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Audio-Nav', 'clashvibes' ),
			'id'            => 'Audio-Nav',
			'description'   => __( 'Audio Side bar', 'clashvibes' ),
			'before_widget' => '<div class="blog_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clashvibes_audio_widgets_init' );

/**
 *
 *  Video area.
 */
function clashvibes_video_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Video-Nav', 'clashvibes' ),
			'id'            => 'Video-Nav',
			'description'   => __( 'Video Side bar', 'clashvibes' ),
			'before_widget' => '<div class="blog_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clashvibes_video_widgets_init' );

/**
 *
 *  contact form area.
 */
function clashvibes_contact_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'contact', 'clashvibes' ),
			'id'            => 'contact',
			'description'   => __( 'Contact Side bar', 'clashvibes' ),
			'before_widget' => '<div id="contactform">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clashvibes_contact_widgets_init' );

/**
 *  To register my css styles I use the function below.
 */

function clashvibes_enqueue_extra_styles() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );

	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', false, '1.1', 'all' );

	wp_enqueue_style( 'clashvibes-style', get_stylesheet_uri() );

	wp_enqueue_style( 'third-custom-style', get_stylesheet_directory_uri() . '/reset.css', array(), '1', 'true' );

}
add_action( 'wp_enqueue_scripts', 'clashvibes_enqueue_extra_styles' );


add_action( 'wp_enqueue_scripts', 'clashvibes_audio_own' );
function clashvibes_audio_own() {

	if ( 'clash_audio' === get_post_type() ) {
		wp_register_script( 'audio', get_template_directory_uri() . '/js/dist/audio.min.js', array( 'jquery' ), '1.0.0', 'true' );

		/**
		 * wp_register_script( 'jplayer', get_template_directory_uri() . '/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js', array('jquery'),'1.0.0', 'true' );
		 *
		 * wp_register_script( 'jplayer-audio', get_template_directory_uri() . '/js/jplayer-audio.js', array('jquery'),'1.0.0', 'true' );
		 */

	}
}

/**
 *
 * Spare Function
 *
 * add_action( 'wp_enqueue_scripts', 'clashvibes__video_own' );
 *
 * function clashvibes__video_own() {
 *  if( "clash_videos" == get_post_type()){
 * wp_register_script( 'video', get_template_directory_uri() . '/js/video.js', array('jquery'),'1.0.0', 'true' );
 * wp_enqueue_script( 'video' );
 * }
 * }
 */


/**
 * Clashvibes scripts
 */
function clashvibes_scripts() {

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/minified/main.min.js', array( 'jquery' ), '1.0.0', 'true' );

	wp_enqueue_script( 'clashvibes-navigation', get_template_directory_uri() . '/js/minified/navigation.min.js', array(), '20151215', true );

	wp_enqueue_script( 'clashvibes-skip-link-focus-fix', get_template_directory_uri() . '/js/minified/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clashvibes_scripts' );

/**
 * cc_mime_types
 */
function clashvibes_cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'upload_mimes', 'clashvibes_cc_mime_types' );


/**
 *
 * Except more function
 */
function clashvibes_excerpt_read_more_link( $output ) {
	global $post;

	return $output . '<a href="' . get_permalink( $post->ID ) . '" class="read_more"> Continue...</a>';
}
add_filter( 'the_excerpt', 'clashvibes_excerpt_read_more_link' );

/**
 *
 *
 */
if ( ! function_exists( 'clashvibes_com_attachment_nav' ) ) :
	/**
	 * Display navigation to next/previous image in attachment pages.
	 */
	function clashvibes_attachment_nav() {
		?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="post-nav-box clear">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Attachment post navigation', 'clashvibes' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous">
					<?php previous_image_link( false, '<span class="post-title">Previous image</span>' ); ?>
				</div>
				<div class="nav-next">
					<?php next_image_link( false, '<span class="post-title">Next image</span>' ); ?>
				</div>
			</div><!-- .nav-links -->


		</div>
	</nav>


		<?php
	}
endif;


/**
 *
 *
 */
if ( ! function_exists( 'clashvibes_attached_image' ) ) :
	/**
	 * Print the attached image with a link to the next attached image.
	 * Appropriated from Twenty Fourteen 1.0
	 */
	function clashvibes_attached_image() {
		$post = get_post();
		/**
	 * Filter the default attachment size.
	 */
		$attachment_size     = apply_filters( 'clashvibes_attachment_size', array( 810, 810 ) );
		$next_attachment_url = wp_get_attachment_url();
		/*
		* Grab the IDs of all the image attachments in a gallery so we can get the URL
		* of the next adjacent image in a gallery, or the first image (if we're
		* looking at the last image in a gallery), or, in a gallery of one, just the
		* link to that image file.
		 */
		$attachment_ids = get_posts(
			array(
				'post_parent'      => $post->post_parent,
				'fields'           => 'ids',
				'numberposts'      => 1,
				'post_status'      => 'inherit',
				'post_type'        => 'attachment',
				'post_mime_type'   => 'image',
				'order'            => 'ASC',
				'orderby'          => 'menu_order ID',
				'suppress_filters' => false,
			)
		);
		// If there is more than 1 attachment in a gallery...
		if ( count( $attachment_ids ) > 1 ) {
			foreach ( $attachment_ids as $attachment_id ) {
				if ( $attachment_id === $post->ID ) {
					$next_id = current( $attachment_ids );
					break;
				}
			}
			// get the URL of the next image attachment...
			if ( $next_id ) {
				$next_attachment_url = get_attachment_link( $next_id );
			} // or get the URL of the first image attachment.
			else {
				$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
			}
		}
		printf(
			'<a href="%1$s" rel="attachment">%2$s</a>',
			esc_url( $next_attachment_url ),
			wp_get_attachment_image( $post->ID, $attachment_size )
		);
	}
endif;


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
