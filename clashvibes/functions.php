<?php
add_filter( 'wp_title', 'filter_wp_title' );

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );
add_filter( 'widget_text', 'do_shortcode');


//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :
/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
function my_theme_setup(){
    
    
    load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );
    
    add_theme_support( 'automatic-feed-links' );
    
    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
	add_theme_support( 'title-tag' );
        
    add_theme_support( 'post-thumbnails' );
	
    set_post_thumbnail_size( 170, 170, true );

    add_image_size( 'featured-image', 783, 9999 );
    
    
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
        
    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
      
    
    function wpb_add_google_fonts() {

      wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
    }
	
	//add editor styles
add_editor_style( array( 'styles/custom-editor-style.css','fonts/kelson_regular/stylesheet.css' ) );


add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );


add_theme_support( 'title-tag' );
	
$args = array(
		'width'         => 325,
		'height'        => 65,
		'default-image' => get_template_directory_uri() . '/images/logo-1.png',
	);
	add_theme_support( 'custom-header', $args );

	$defaults = array(
		'default-color'          => '',
	//	'default-image'          => get_template_directory_uri() . '/images/bg.jpg',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

    $defaults = array(
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
    add_theme_support( 'nav-menus',$defaults );
	
    $defaults = array(
        'before'           => '<p>' . __( 'Pages:', 'clashvibes' ),
        'after'            => '</p>',
        'link_before'      => '',
        'link_after'       => '',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => __( 'Next page', 'clashvibes'),
        'previouspagelink' => __( 'Previous page', 'clashvibes' ),
        'pagelink'         => '%',
        'echo'             => 1
	);
    wp_link_pages( $defaults );
    
    function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );


}

endif; // my_theme_setup end
add_action('after_setup_theme', 'my_theme_setup');

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


if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'main' => 'Main Nav',
            'Secondary' => 'Secondary',
            'mobile' => 'mobile',
            'Audio-Nav' => 'audio-nav',
            'Video-Nav' => 'video-nav'
        ));
}

//Audio area
function audio_widgets_init() {
    register_sidebar( array(
        'name' => 'Audio-Nav',
        'id' => 'Audio-Nav',
        'before_widget' => '<div class="blog_box">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'audio_widgets_init' );

//Video area
function video_widgets_init() {
    register_sidebar( array(
    'name' => 'Video-Nav',
    'id' => 'Video-Nav',
    'before_widget' => '<div class="blog_box">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'video_widgets_init' );

//contact form area
function contact_widgets_init() {
    register_sidebar( array(
    'name' => 'contact',
    'id' => 'contact',
    'before_widget' => '<div id="contactform">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'contact_widgets_init' );

/* To register my css styles I use the function below:*/

function enqueue_extra_styles(){
    
    wp_enqueue_style( 'clashvibes-style', get_stylesheet_uri() );
    
	wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/master.css', array(), '1', 'true' );
	
	wp_register_style( 'third-custom-style', get_stylesheet_directory_uri() . '/reset.css', array(), '1', 'true' );
			
	wp_register_style('awesome', get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
		
	wp_enqueue_style( 'custom-style' );
	wp_enqueue_style('third-custom-style');
	wp_enqueue_style('awesome');
	
	}
add_action('wp_enqueue_scripts', 'enqueue_extra_styles');


add_action( 'wp_enqueue_scripts', 'my_audio_own' );	
function my_audio_own() {
	if(is_singular()){
			
		 wp_register_script( 'audio', get_template_directory_uri() . '/js/audio.js', array('jquery'),'1.0.0', 'true' );
			
			//wp_register_script( 'jplayer', get_template_directory_uri() . '/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js', array('jquery'),'1.0.0', 'true' );
			//wp_register_script( 'jplayer-audio', get_template_directory_uri() . '/js/jplayer-audio.js', array('jquery'),'1.0.0', 'true' );
			//wp_enqueue_script( 'jplayer' );
			//wp_enqueue_script( 'jplayer-audio' );

			wp_enqueue_script( 'audio' );
		//	wp_enqueue_script( 'audio' );
	}    
}

add_action( 'wp_enqueue_scripts', 'my_video_own' );	
function my_video_own() {
	if(is_singular()){
			
		 wp_register_script( 'video', get_template_directory_uri() . '/js/video.js', array('jquery'),'1.0.0', 'true' );
			wp_enqueue_script( 'video' );

	}    
}

function clashvibes_scripts() {
    
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0.0', 'true' );
    
    wp_enqueue_script( 'clashvibes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'clashvibes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clashvibes_scripts' );

/**
 * End of enqueue scripts and styles
 */
function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );


/****Sidebars!******/
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array (
	'name' => __( 'Primary Sidebar', 'clashvibes' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'dir' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
	) );
}

function excerpt_read_more_link($output) {
 global $post;
 
 return $output . '<a href="'. get_permalink($post->ID) . '" class="read_more"> Continue...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


/*****Sidebars!******/

if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'clashvibes' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'dir' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}


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

?>


