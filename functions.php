<?php
/**
 * *PHP version 7
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
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 */

require_once get_stylesheet_directory() . '/clashvibes-customv2/clashvibes-customv2.php';

add_filter( 'wp_title', 'clashvibes_filter_wp_title', 10, 2 );
/**
 * Filters the page title appropriately depending on the current page.
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @param array $title variable.
 * @uses    get_bloginfo()
 * @uses    is_home()
 * @uses    is_front_page()
 */
function clashvibes_filter_wp_title( $title ) {

	global $page, $paged;

	if ( is_feed() ) {
		return $title;
	}

	$site_description = get_bloginfo( 'description' );

	$filtered_title  = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description : '';
	/* translators: %s: search term */
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'clashvibes' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

// Remove version from head.
remove_action( 'wp_head', 'wp_generator' );

/**
 * Theme set up.
 */
if ( ! function_exists( 'clashvibes_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clashvibes_theme_setup() {

		// audio.
		register_meta(
			'post',
			'sound_system_name',
			[
				'object_subtype' => 'clash-audio',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_year',
			[
				'object_subtype' => 'clash-audio',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_location',
			[
				'object_subtype' => 'clash-audio',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_url',
			[
				'object_subtype' => 'clash-audio',
				'show_in_rest'   => true,
			]
		);

		// video.
		register_meta(
			'post',
			'sound_system_name',
			[
				'object_subtype' => 'clash-videos',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_year',
			[
				'object_subtype' => 'clash-videos',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_location',
			[
				'object_subtype' => 'clash-videos',
				'show_in_rest'   => true,
			]
		);

		register_meta(
			'post',
			'sound_clash_url',
			[
				'object_subtype' => 'clash-videos',
				'show_in_rest'   => true,
			]
		);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/**
		 * Text domain.
		 */
		load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );

		$locale      = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";
		if ( is_readable( $locale_file ) ) {
			require_once $locale_file;
		}

		/**
		 * Register menus.
		 */
		register_nav_menus(
			array(
				'main'      => esc_html__( 'Main Nav', 'clashvibes' ),
				'Secondary' => esc_html__( 'Secondary', 'clashvibes' ),
				'mobile'    => esc_html__( 'mobile', 'clashvibes' ),
				'Audio-Nav' => esc_html__( 'audio-nav', 'clashvibes' ),
				'Video-Nav' => esc_html__( 'video-nav', 'clashvibes' ),
			)
		);

		add_theme_support( 'automatic-feed-links' );

		// Add editor styles.
		add_editor_style( array( 'styles/custom-editor-style.css' ) );

		// Add post formats.
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

		add_theme_support( 'post-thumbnails' );

		// Create new image sizes.
		add_image_size( 'featured-image', 800, 999 );
		add_image_size( 'post-image', 400, 9999 );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Add theme support for custom background.
		$defaults = array(
			'default-color'          => 'e9ad29',
			'default-image'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $defaults );

		// Add theme support for nav-menus.
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

		// link pages
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

		add_filter( 'the_generator', '__return_false' );
		// remove version from rss.
		add_filter( 'the_generator', '__return_empty_string' );

	}

endif;
add_action( 'after_setup_theme', 'clashvibes_theme_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clashvibes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'clashvibes_content_width', 640 );
}
add_action( 'after_setup_theme', 'clashvibes_content_width', 0 );


/**
 * Remove comment-reply.min.js from footer
 */
function comments_clean_header_hook() {
	wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'comments_clean_header_hook' );

/**
 *  To register my css styles I use the function below.
 */
function clashvibes_enqueue_extra_styles() {

	wp_enqueue_style( 'clashvibes-style', get_stylesheet_uri(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'clashvibes_enqueue_extra_styles' );


/**
 * Enqueue IE8 style sheets.
 */
function ie_style_sheets() {
	// Load the Internet Explorer specific stylesheet.
	wp_register_style( 'ie8', get_stylesheet_directory_uri() . '/ie.css', array(), '1.0', false );
	$GLOBALS['wp_styles']->add_data( 'ie8', 'conditional', 'lte IE 8' );

	wp_enqueue_style( 'ie8' );

}
add_action( 'wp_enqueue_scripts', 'ie_style_sheets' );

/**
 * Load the html5.
 *  */
add_action(
	'wp_enqueue_scripts',
	function () {
		$conditional_scripts = [

			'html5shiv'   => '/js/old-browser-scripts/html5shiv.min.js',
			'respond'     => '/js/old-browser-scripts/Respond-master/dest/respond.src.js',
			'selectivizr' => '/js/old-browser-scripts/selectivizr-min.js',

		];
		foreach ( $conditional_scripts as $handle => $src ) {
			wp_enqueue_script( $handle, get_template_directory_uri(), array(), '1.0', false );
		}
		add_filter(
			'script_loader_tag',
			function( $tag, $handle ) use ( $conditional_scripts ) {

				if ( array_key_exists( $handle, $conditional_scripts ) ) {
					$tag = '<!--[if (lt IE 8) & (!IEMobile)]>' . $tag . '<![endif]-->' . "\n";
				}
				return $tag;
			},
			10,
			2
		);
	},
	11
);


/**
 * Clashvibes scripts.
 */
function clashvibes_scripts() {

	// mobile side menu script for mobile blog, archive, audio and video pages.

	if ( 'clash-audio' === get_post_type() || 'clash-videos' === get_post_type() || ! is_front_page() || is_category() || is_home() ) {

		wp_enqueue_script( 'sidenav', get_template_directory_uri() . '/js/mobile-sidenav-es6.js', array(), '1.0.0', 'true' );

	}

		// mobile main menu script for all mobile pages.
		wp_enqueue_script( 'main-mobile', get_template_directory_uri() . '/js/mobile-mainnav-es6.js', array(), '1.0.0', true );

		wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( 'clash-audio' === get_post_type() ) {
		wp_enqueue_script( 'clashvibes-audio', get_template_directory_uri() . '/js/audio-es6.js', array(), '1.0.0', true );
	}

	if ( 'clash-videos' === get_post_type() ) {
		wp_enqueue_script( 'clashvibes-video', get_template_directory_uri() . '/js/video-es6.js', array(), '1.0.0', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clashvibes_scripts' );





/**
 * Sidebars!
 */
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
 * Audio area.
 */
function clashvibes_audio_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Audio-Nav', 'clashvibes' ),
			'id'            => 'Audio-Nav',
			'description'   => __( 'Audio Side bar', 'clashvibes' ),
			'before_widget' => '<section class="clashvibes_left_column_box">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clashvibes_audio_widgets_init' );

/**
 * Video area.
 */
function clashvibes_video_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Video-Nav', 'clashvibes' ),
			'id'            => 'Video-Nav',
			'description'   => __( 'Video Side bar', 'clashvibes' ),
			'before_widget' => '<div class="clashvibes_left_column_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clashvibes_video_widgets_init' );


/**
 *  Remove WordPress.
 *
 *  @param array $headers remove WordPress headers.
 */
function clashvibes_remove_change_myheaders( $headers ) {
	unset( $headers['X-Pingback'] );
	$headers['X-Powered-By'] = 'PHP/5';
	return $headers;
}
add_filter( 'wp_headers', 'clashvibes_remove_change_myheaders' );

require get_template_directory() . '/inc/clashvibes-shorties-audio.php';
require get_template_directory() . '/inc/clashvibes-shorties-video.php';


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
