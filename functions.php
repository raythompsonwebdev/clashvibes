<?php

define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));

define( 'IMAGES', TEMPPATH. "/images");


function fix_ie8() {if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");}}


add_action('send_headers','fix_ie8');    // for WordPress
add_filter( 'wp_title', 'filter_wp_title' );

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );
add_filter( 'widget_text', 'do_shortcode');

function filter_wp_title( $title ) {
	global $page, $paged;
	if ( is_feed() )
	return $title;

	$site_description = get_bloginfo( 'description' );
	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';
	return $filtered_title;
}


//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

    function wpb_add_google_fonts() {

      wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
    }
	
	//add editor styles
add_editor_style( array( 'styles/custom-editor-style.css','fonts/kelson_regular/stylesheet.css' ) );

<<<<<<< HEAD
	//add editor styles
add_editor_style( array( 'styles/custom-editor-style.css','fonts/kelson_regular/stylesheet.css' ) );

=======
>>>>>>> origin/master
if ( ! isset( $content_width ) ) {$content_width = 800;};

load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );

add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );

add_theme_support( 'post-thumbnails' );
<<<<<<< HEAD

=======
	
>>>>>>> origin/master
set_post_thumbnail_size( 170, 170, true );


<<<<<<< HEAD
$args = array(

	'width'   => 300,
	'height'  => 80,
	'default-image' => get_template_directory() . '/images/logo-1.png'

);
add_theme_support( 'custom-header', $args);
=======
>>>>>>> origin/master

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

add_theme_support( 'automatic-feed-links' );


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

);
add_theme_support( 'nav-menus',$defaults );
<<<<<<< HEAD
=======
	
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
>>>>>>> origin/master


}

endif; // my_theme_setup end
add_action('after_setup_theme', 'my_theme_setup');


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

<<<<<<< HEAD
function enqueue_extra_styles(){
    
	wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/master.css', array(), '1', 'true' );
	
	wp_register_style( 'third-custom-style', get_stylesheet_directory_uri() . '/reset.css', array(), '1', 'true' );
	
	wp_register_style( 'kelson', get_stylesheet_directory_uri() . '/fonts/kelson_regular/stylesheet.css', array(), '1', 'true' );
	
	wp_register_style( 'titilium', get_stylesheet_directory_uri() . '/fonts/font-style.css', array(), '1', 'true' );
			
	wp_register_style('awesome', get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );
	
	
	wp_enqueue_style( 'custom-style' );
	wp_enqueue_style('third-custom-style');
	wp_enqueue_style('titilium');
	wp_enqueue_style('kelson');
	wp_enqueue_style('awesome');
	
	}
	
	add_action('wp_enqueue_scripts', 'enqueue_extra_styles');

function my_audio_own() {
=======
function my_audio_own() {

>>>>>>> e59775bfeba4f87281198542f06ef862eac85291
if(is_singular()){

    wp_register_script( 'audio', get_template_directory_uri() . '/js/audio.js', array('jquery'),'1.0.0', 'true' );
    
    //wp_register_script( 'jplayer', get_template_directory_uri() . '/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js', array('jquery'),'1.0.0', 'true' );
    // wp_register_script( 'jplayer-audio', get_template_directory_uri() . '/js/jplayer-audio.js', array('jquery'),'1.0.0', 'true' );
    //wp_enqueue_script( 'jplayer' );
    // wp_enqueue_script( 'jplayer-audio' );

    //wp_register_script( 'jplayer', get_template_directory_uri() . '/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js', array('jquery'),'1.0.0', 'true' );

   // wp_register_script( 'jplayer-audio', get_template_directory_uri() . '/js/jplayer-audio.js', array('jquery'),'1.0.0', 'true' );

    //wp_enqueue_script( 'jplayer' );

   // wp_enqueue_script( 'jplayer-audio' );

    wp_enqueue_script( 'audio' );

<<<<<<< HEAD
}    
=======
    wp_enqueue_script('jquery');
}
>>>>>>> e59775bfeba4f87281198542f06ef862eac85291

}
add_action( 'wp_enqueue_scripts', 'my_audio_own' );


function my_scripts_own() {
<<<<<<< HEAD

    if(is_front_page()){


=======
    
<<<<<<< HEAD
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0.0', 'true' );
	wp_enqueue_script( 'main' );
=======
    if(is_front_page()){
        
        
>>>>>>> origin/master
    }
>>>>>>> e59775bfeba4f87281198542f06ef862eac85291


}
add_action( 'wp_enqueue_scripts', 'my_scripts_own' );

<<<<<<< HEAD
=======
/* To register my css styles I use the function below:*/

function enqueue_extra_styles(){

wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/master.css', array(), '1', 'true' );

wp_register_style( 'third-custom-style', get_stylesheet_directory_uri() . '/reset.css', array(), '1', 'true' );

wp_register_style( 'kelson', get_stylesheet_directory_uri() . '/fonts/kelson_regular/stylesheet.css', array(), '1', 'true' );
<<<<<<< HEAD

wp_register_style( 'titilium', get_stylesheet_directory_uri() . '/fonts/font-style.css', array(), '1', 'true' );

=======

wp_register_style( 'titilium', get_stylesheet_directory_uri() . '/fonts/font-style.css', array(), '1', 'true' );
    
>>>>>>> origin/master
wp_register_style('awesome', get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );


wp_enqueue_style( 'custom-style' );
wp_enqueue_style('third-custom-style');
wp_enqueue_style('titilium');
wp_enqueue_style('kelson');
wp_enqueue_style('awesome');

}

add_action('wp_enqueue_scripts', 'enqueue_extra_styles');

//ie 8 styles and scripts
function ie_scripts() {

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'clashvibes-ie', get_template_directory_uri() . '/ie.css', array(), '1.0' );
	wp_style_add_data( 'clashvibes-ie', 'conditional', 'lte IE 9' );

    // Load the CustomEvent Script.
	//wp_enqueue_script( 'clashvibes-iejs', get_template_directory_uri() . '/js/ie8.js', array(), '1.0' );
	//wp_script_add_data( 'clashvibes-iejs', 'conditional', 'lte IE 9' );

	// Load the html5.
	//wp_enqueue_script( 'clashvibes-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3' );
	//wp_script_add_data( 'clashvibes-html5', 'conditional', 'lte IE 9' );

	// Load the Selectivizr.
	//wp_enqueue_script( 'clashvibes-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array('jquery'), '3.7.3');
	//wp_script_add_data( 'clashvibesm-selectivizr', 'conditional', 'lte IE 9' );

	// Load the respond.
	//wp_enqueue_script( 'clashvibes-respond', get_template_directory_uri() . '/js/Respond-master/src/respond.js', array(), '1.0.0');

	//wp_script_add_data( 'clashvibes-respond', 'conditional', 'lte IE 9' );

}
add_action( 'wp_enqueue_scripts', 'ie_scripts' );

>>>>>>> e59775bfeba4f87281198542f06ef862eac85291
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
	'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
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
 return $output . '<a href="'. get_permalink($post->ID) . '" class="read_more"> Listen...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


/*****Sidebars!******/

if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'secondary-sidebar' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'dir' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}


?>

<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
