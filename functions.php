<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");


function fix_ie8() {if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");}}
add_action('bb_send_headers','fix_ie8');  // for bbPress
add_action('send_headers','fix_ie8');    // for WordPress
add_filter( 'wp_title', 'filter_wp_title' );

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

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

add_editor_style('custom-editor-style.css'  );

//theme set up
if ( ! function_exists( 'my_theme_setup' ) ) :

function my_theme_setup(){

    function wpb_add_google_fonts() {

      wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700', false );
    }

if ( ! isset( $content_width ) ) {$content_width = 600;};

load_theme_textdomain( 'clashvibes', get_template_directory() . '/languages' );

add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat') );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 170, 170, true );

add_theme_support( 'title-tag' );

$args = array(
    'flex-width'    => true,
    'width'         => 240,
    'flex-height'   => false,
    'height'        => 120,
    'default-image' => get_template_directory_uri() . '/img/header.jpg',
    'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'nav-menus',$defaults );

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

//$my_post_formats = array( 'quote', 'chat', 'audio', 'gallery' );
//add_theme_support( 'post-formats', $my_post_formats );

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


function my_audio_own() {
    
if(is_singular()){
    
    wp_register_script( 'audio', get_template_directory_uri() . '/js/audio.js', array('jquery'),'1.0.0', 'true' );

    wp_enqueue_script( 'audio' );

    wp_enqueue_script('jquery');
}    

}
add_action( 'wp_enqueue_scripts', 'my_audio_own' );


function my_scripts_own() {
    
if(is_front_page()){
    wp_register_script( 'slider', get_template_directory_uri() . '/js/easySlider1.5.js', array('jquery'),'1.0.0', 'true' );

    wp_enqueue_script( 'slider' );

    wp_enqueue_script('jquery');
    
}    



}

add_action( 'wp_enqueue_scripts', 'my_scripts_own' );

/* To register my css styles I use the function below:*/

function enqueue_extra_styles(){
    
wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/master.css', array(), '1', 'true' );

wp_register_style( 'third-custom-style', get_stylesheet_directory_uri() . '/reset.css', array(), '1', 'true' );

wp_register_style( 'titilium', get_stylesheet_directory_uri() . '/fonts/kelson_regular/stylesheet.css', array(), '1', 'true' );

wp_register_style( 'kelson', get_stylesheet_directory_uri() . '/fonts/font-style.css', array(), '1', 'true' );
    
wp_register_style('awesome',get_stylesheet_directory_uri() . '/fontawesome/css/font-awesome.min.css', false,'1.1','all' );


wp_enqueue_style( 'custom-style' );
wp_enqueue_style('third-custom-style');
wp_enqueue_style('titilium');
wp_enqueue_style('kelson');
wp_enqueue_style('awesome');

}

add_action('wp_enqueue_scripts', 'enqueue_extra_styles');

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

