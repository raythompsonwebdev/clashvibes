<?php
/**
 * clashvibes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clashvibes
 */

if ( ! defined( 'CLASHVIBES_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'CLASHVIBES_VERSION', '1.0.0' );

}

/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it rudeboy/girl!';
}
add_filter( 'login_errors', 'cwpl_error_message' );

if ( ! function_exists( 'clashvibes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clashvibes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on clashvibes, use a find and replace
		 * to change 'clashvibes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add editor styles.
		add_editor_style( array( 'css/custom-editor-style.css' ) );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Create new image sizes.
		add_image_size( 'featured-image', 1200, 999 );
		add_image_size( 'post-image', 600, 999 );
		add_image_size( 'popular-image', 60, 60 ); // front page popular video & audio images

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main'      => esc_html__( 'main', 'clashvibes' ),
				'Secondary' => esc_html__( 'secondary', 'clashvibes' ),
				'Mobile'    => esc_html__( 'mobile', 'clashvibes' ),
				'Audio-Nav' => esc_html__( 'audio-nav', 'clashvibes' ),
				'Video-Nav' => esc_html__( 'video-nav', 'clashvibes' ),
			)
		);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

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

			// Add theme support for custom Header.
			$defaults = array(
				'default-image'          => '',
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
				'video'                  => false,
				'video-active-callback'  => 'is_front_page',
			);
			add_theme_support( 'custom-header', $defaults );

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

			// Set up the WordPress core custom background feature.
			add_theme_support(
				'custom-background',
				apply_filters(
					'clashvibes_custom_background_args',
					array(
						'default-color' => 'ffffff',
						'default-image' => '',
					)
				)
			);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 90,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'clashvibes_setup' );

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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clashvibes_widgets_init() {
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
add_action( 'widgets_init', 'clashvibes_widgets_init' );

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
 * Enqueue scripts and styles.
 */
function clashvibes_scripts() {
	wp_enqueue_style( 'clashvibes-style', get_stylesheet_uri(), array(), CLASHVIBES_VERSION_VERSION );
	wp_style_add_data( 'clashvibes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'clashvibes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), CLASHVIBES_VERSION_VERSION, true );

	if ( 'clash-audio' === get_post_type() || 'clash-videos' === get_post_type() || ! is_front_page() || is_category() || is_home() ) {

		wp_enqueue_script( 'sidenav', get_template_directory_uri() . '/js/mobile-sidenav-es6.js', array(), '1.0.0', 'true' );

	}

	 wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/contact-form.js', array( 'jquery' ), '1.0', true );

		// mobile main menu script for all mobile pages.
		wp_enqueue_script( 'main-mobile', get_template_directory_uri() . '/js/mobile-mainnav-es6.js', array(), '1.0.0', true );

		wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );

		wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0', true );

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
 * Replaces the excerpt "Read More" text by a link.
 *
 * @param mixed $more variable added.
 * @return $more
 */
function new_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more', 21 );

/**
 * Replaces the excerpt more "Read More" text by a link.
 *
 * @param mixed $excerpt variable added.
 * @return $excerpt
 */
function the_excerpt_more_link( $excerpt ) {
	$post = get_post();

	if ( is_tax( 'video-category' ) ) {

		$excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">Continue Watching: ' . get_the_title( $post->ID ) . '</a>';
		return $excerpt;

	} elseif ( is_tax( 'audio-category' ) ) {

		$excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">Continue Listening: ' . get_the_title( $post->ID ) . '</a>';
		return $excerpt;

	} else {

		$excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">continue reading: ' . get_the_title( $post->ID ) . '</a>';
		return $excerpt;

	}

}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );


// require get_template_directory() . '/inc/clashvibes-shorties-audio.php';
// require get_template_directory() . '/inc/clashvibes-shorties-video.php';

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

