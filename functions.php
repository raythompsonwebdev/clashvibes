<?php
/**
 * PHP version 7
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

//require_once get_stylesheet_directory() . '/clashvibes-customv2/clashvibes-customv2.php';

/**
 * Returns a custom login error message.
 */
function cwpl_error_message() {
	return 'Well, that was not it rudeboy/girl!';
}
add_filter( 'login_errors', 'cwpl_error_message' );

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
add_filter( 'wp_title', 'clashvibes_filter_wp_title', 10, 2 );

// Remove version from head.
remove_action( 'wp_head', 'wp_generator' );

/**
 * Text domain.
 */
load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );

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

		$GLOBALS['content_width'] = apply_filters( 'clashvibes_content_width', 640 );

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

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/**
		 * Register menus.
		 */
		register_nav_menus(
			array(
				'main'      => esc_html__( 'main', 'clashvibes' ),
				'Secondary' => esc_html__( 'secondary', 'clashvibes' ),
				'Mobile'    => esc_html__( 'mobile', 'clashvibes' ),
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
		add_image_size( 'featured-image', 1200, 999 );
    add_image_size( 'post-image', 600, 999 );
    add_image_size( 'popular-image', 60, 60 ); //front page popular video & audio images


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


		// 2 removes the “wlwmanifest” link. wlwmanifest.xml is the resource file needed to enable support for Windows Live Writer. Nobody on Earth needs that. Note that this command simply removes the link, if you want to completely disable the functionality you need to deny access to the file /wp-includes/wlwmanifest.xml probably from your .htaccess (but that’s not strictly needed).
		remove_action( 'wp_head', 'wlwmanifest_link' );

		// 3 The RSD is an API to edit your blog from external services and clients. If you edit your blog exclusively from the WP admin console, you don’t need this.
		remove_action( 'wp_head', 'rsd_link' );

		// 4 “wp_shortlink_wp_head” adds a “shortlink” into your document head that will look like http://example.com/?p=ID. No need, thanks.
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );

		// 5 Removes a link to the next and previous post from the document header. This could be theoretically beneficial, but to my experience it introduces more problems than it solves. Please note that this has nothing to deal with the “next/previous” post that you may want to add at the end of each post.
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );

		// remove version from rss.
		// add_filter( 'the_generator', '__return_empty_string' );.

		// 6 Removes the generator name from the RSS feeds.
		add_filter( 'the_generator', '__return_false' );

		// 7 Removes the administrator’s bar and also the associated CSS styles. Especially during the development phase I find it very annoying.
		// add_filter('show_admin_bar','__return_false');

		// 8 Removes WP 4.2 emoji styles and JS. Nasty stuff.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		// Allowed tags
		// How many times your users used the del or abbr tag? Yeah, exactly, zero. Let’s remove some of the allowed tags in comments.
		// We can just add to the setup function the following.
		global $allowedtags;
		unset( $allowedtags['cite'] );
		unset( $allowedtags['q'] );
		unset( $allowedtags['del'] );
		unset( $allowedtags['abbr'] );
		unset( $allowedtags['acronym'] );

	}

endif;
add_action( 'after_setup_theme', 'clashvibes_theme_setup' );

/**
 * Disable the emoji's
 */
function clashvibes_disable_emojis() {
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

}
add_action( 'init', 'clashvibes_disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array $plugins plugins array.
 * @return   array Difference betwen the two arrays.
 */
function clashvibes_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
add_filter( 'tiny_mce_plugins', 'clashvibes_disable_emojis_tinymce' );

/**
 * Remove Query Strings – Optional Step.
 *
 * @param array $src parameter.
 */
function clashvibes_remove_script_version( $src ) {
	$parts = explode( '?ver', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', 'clashvibes_remove_script_version', 15, 1 );

/**
 * Remove WP embed script.
 */
function speed_stop_loading_wp_embed() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'wp-embed' );
	}
}
add_action( 'init', 'speed_stop_loading_wp_embed' );


/**
 *  Remove comment cookies.
 */
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

/**
 *  Remove version from scripts and styles.
 *
 *  @param array $src array of.
 *  @var array $src array of.
 */
function shape_space_remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'shape_space_remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'shape_space_remove_version_scripts_styles', 9999 );

/**
 * Enqueue Jquery.
 *
 * @return void
 */
function my_jquery_enqueue() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), 1.0, true );
	wp_enqueue_script( 'jquery' );
}
if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue', 11 );
}


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
 * Load the IE8 Scripts.
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

	 wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), '1.0', true );

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
  $post     = get_post();

  if(is_tax('video-category')){

    $excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">Continue Watching: ' . get_the_title( $post->ID ) . '</a>';
    return $excerpt;

  }elseif(is_tax('audio-category')){

    $excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">Continue Listening: ' . get_the_title( $post->ID ) . '</a>';
    return $excerpt;

  }else{

    $excerpt .= '<a class="read_more" href="' . get_permalink( $post->ID ) . '">continue reading: ' . get_the_title( $post->ID ) . '</a>';
    return $excerpt;

  }

}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );



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
