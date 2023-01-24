<?php

/**
 * Clashvibes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clashvibes
 * @author  Raymond Thompson <raymond.thompson@raythompsonwebdev.co.uk>
 */
if (!defined('CLASHVIBES_VERSION')) {
	define('CLASHVIBES_VERSION', '1.0.0');
}

/**
 * Returns a custom login error message.
 */
function clashvibes_error_message()
{
	return 'Well, that was not it, try again!';
}
add_filter('login_errors', 'clashvibes_error_message');

if (!function_exists('clashvibes_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clashvibes_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on clashvibes, use a find and replace
		 * to change 'clashvibes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('clashvibes', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Add block editor  styles.
		$font_url = '//https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap';
		add_editor_style(array('css/editor-style.css', str_replace(',', '%2C', $font_url)));
		add_theme_support('editor-styles');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// Create new image sizes.
		add_image_size('featured-image', 1200, 625);
		add_image_size('blog-thumbnail', 1000, 625);
		add_image_size('audio-thumbnail', 800, 525);
		add_image_size('post-thumbnail', 160, 160, true);
		add_image_size('popular-image', 60, 60, true); // front page popular video & audio images.
		add_image_size('event-image', 100, 70, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main'       => esc_html__('main', 'clashvibes'),
				'Secondary'  => esc_html__('secondary', 'clashvibes'),
				'Mobile'     => esc_html__('mobile', 'clashvibes'),
				'Audio-Nav'  => esc_html__('audio-nav', 'clashvibes'),
				'Video-Nav'  => esc_html__('video-nav', 'clashvibes'),
				'Events-Nav' => esc_html__('events-nav', 'clashvibes'),
			)
		);

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
		add_theme_support('custom-header', $defaults);

		// Add theme support for custom background.
		$defaults = array(
			'default-color'          => 'e9ad29',
			'default-image'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support('custom-background', $defaults);

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
		add_theme_support('nav-menus', $args);

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
		add_theme_support('customize-selective-refresh-widgets');

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

		// Enable block editor styles to match the front end.
		add_theme_support('wp-block-styles');

		// Enable wide alignments in block editor.
		add_theme_support('align-wide');

		// allow embeds to be responsive.
		add_theme_support('responsive_embeds');
	}
endif;
add_action('after_setup_theme', 'clashvibes_setup');

/**
 * Remove version from rss.
 */
add_filter('the_generator', '__return_empty_string');


/**
 * Loads dashicons.
 */
function clashvibes_load_dashicons_front_end()
{
	wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'clashvibes_load_dashicons_front_end');

/**
 * Remove version from scripts and styles.
 *
 * @param string $src script style link.
 */
function clashvibes_remove_version_scripts_styles($src)
{
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'clashvibes_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'clashvibes_remove_version_scripts_styles', 9999);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clashvibes_content_width()
{
	$GLOBALS['content_width'] = apply_filters('clashvibes_content_width', 1200);
}
add_action('after_setup_theme', 'clashvibes_content_width', 0);


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clashvibes_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Primary Sidebar', 'clashvibes'),
			'id'            => 'primary-widget-area',
			'description'   => __('The primary widget area', 'clashvibes'),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'clashvibes_widgets_init');

/**
 * Events category pages navigation.
 */
function clashvibes_events_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Events-Nav', 'clashvibes'),
			'id'            => 'Events-Nav',
			'description'   => __('Events Side bar', 'clashvibes'),
			'before_widget' => '<div class="clashvibes_left_column_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'clashvibes_events_widgets_init');

/**
 * Audio category pages navigation.
 */
function clashvibes_audio_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Audio-Nav', 'clashvibes'),
			'id'            => 'Audio-Nav',
			'description'   => __('Audio Side bar', 'clashvibes'),
			'before_widget' => '<section class="clashvibes_left_column_box">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'clashvibes_audio_widgets_init');

/**
 * Video category pages navigation.
 */
function clashvibes_video_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Video-Nav', 'clashvibes'),
			'id'            => 'Video-Nav',
			'description'   => __('Video Side bar', 'clashvibes'),
			'before_widget' => '<div class="clashvibes_left_column_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'clashvibes_video_widgets_init');



/**
 * Block Editor Fonts.
 */
function clashvibes_block_editor_fonts()
{
	wp_enqueue_style('clashvibes-block-editor-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap', array(), CLASHVIBES_VERSION);
}
add_action('enqueue_block_editor_assets', 'clashvibes_block_editor_fonts');

/**
 * Block Editor Styling.
 */
function clashvibes_add_block_style()
{
	wp_enqueue_script('clashvibes-block-variations', get_template_directory_uri() . '/js/custom-block-settings.js', array('wp-blocks'), CLASHVIBES_VERSION, false);
}
add_action('enqueue_block_editor_assets', 'clashvibes_add_block_style');

/**
 * Enqueue scripts and styles.
 */
function clashvibes_scripts()
{
	wp_enqueue_style('clashvibes-style', get_stylesheet_uri(), array(), CLASHVIBES_VERSION);
	wp_style_add_data('clashvibes-style', 'rtl', 'replace');

	wp_enqueue_style('clashvibes-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap', array(), CLASHVIBES_VERSION);

	// built in mobile navigation toggle.
	// wp_enqueue_script( 'clashvibes-navigation', get_template_directory_uri() . '/js/navigation.js', array(),CLASHVIBES_VERSION, true );.

	if ('clash-audio' === get_post_type() || 'clash-videos' === get_post_type() || !is_front_page() || is_category() || is_home()) {

		wp_enqueue_script('sidenav', get_template_directory_uri() . '/js/mobile-sidenav-es6.js', array(), '1.0.0', 'true');
	}

	// mobile main menu script for all mobile pages.
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), CLASHVIBES_VERSION, true);

	// mobile main menu script for all mobile pages.
	wp_enqueue_script('main-mobile', get_template_directory_uri() . '/js/mobile-mainnav-es6.js', array(), CLASHVIBES_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'clashvibes_scripts');

// add_action('pre_get_posts', 'wpshout_pages_blogindex');
// function wpshout_pages_blogindex($query)
// {
// 	if (is_home() && $query->is_main_query()) :
// 		$query->set('post_type', 'clash-audio');
// 	endif;
// }

// Make Courses posts show up in archive pages
// add_action('pre_get_posts', 'wpshout_add_custom_post_types_to_query');
// function wpshout_add_custom_post_types_to_query($query)
// {
// 	if (
// 		is_home() &&
// 		empty($query->query_vars['suppress_filters'])
// 	) {
// 		$query->set('post_type', array(
// 			'post',
// 			'clash-events'
// 		));
// 	}
// }



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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
