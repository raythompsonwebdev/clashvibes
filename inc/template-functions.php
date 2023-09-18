<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package clashvibes
 * @param   array $classes Classes for the body element.
 * @return  array
 */
function Clashvibes_Body_classes( $classes )
{
    // Adds a class of hfeed to non-singular pages.
    if (! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (! is_active_sidebar('sidebar-1') ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'Clashvibes_Body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function Clashvibes_Pingback_header()
{
    if (is_singular() && pings_open() ) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'Clashvibes_Pingback_header');
