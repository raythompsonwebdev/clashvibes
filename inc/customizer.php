<?php

/**
 * Clashvibes Theme Customizer.
 *
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @package clashvibes
 * @param   WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Clashvibes_Customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
            'selector'        => '.site-title a',
            'render_callback' => 'clashvibes_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
            'selector'        => '.site-description',
            'render_callback' => 'clashvibes_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'Clashvibes_Customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function Clashvibes_Customize_Partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function Clashvibes_Customize_Partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function Clashvibes_Customize_Preview_js()
{
    wp_enqueue_script('clashvibes-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), wp_get_theme()->get('Version'), true);
}
add_action('customize_preview_init', 'Clashvibes_Customize_Preview_js');
