<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package clashvibes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
<<<<<<< HEAD
function clashvibes_body_classes($classes)
{
//    Adds a class of hfeed to non-singular pages.
    if (! is_singular()) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter('body_class', 'clashvibes_body_classes');
=======
function clashvibes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'clashvibes_body_classes' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
<<<<<<< HEAD
function clashvibes_pingback_header()
{
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
    }
}
add_action('wp_head', 'clashvibes_pingback_header');
=======
function clashvibes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'clashvibes_pingback_header' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
