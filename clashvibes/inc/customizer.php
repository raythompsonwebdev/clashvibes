<?php
/**
 * clashvibes Theme Customizer
 *
 * @package clashvibes
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
<<<<<<< HEAD
function clashvibes_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'clashvibes_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'clashvibes_customize_partial_blogdescription',
        ));
    }
}
add_action('customize_register', 'clashvibes_customize_register');
=======
function clashvibes_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'clashvibes_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'clashvibes_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'clashvibes_customize_register' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
<<<<<<< HEAD
function clashvibes_customize_partial_blogname()
{
    bloginfo('name');
=======
function clashvibes_customize_partial_blogname() {
	bloginfo( 'name' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
<<<<<<< HEAD
function clashvibes_customize_partial_blogdescription()
{
    bloginfo('description');
=======
function clashvibes_customize_partial_blogdescription() {
	bloginfo( 'description' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
<<<<<<< HEAD
function clashvibes_customize_preview_js()
{
    wp_enqueue_script('clashvibes-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true);
}
add_action('customize_preview_init', 'clashvibes_customize_preview_js');
=======
function clashvibes_customize_preview_js() {
	wp_enqueue_script( 'clashvibes-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'clashvibes_customize_preview_js' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357

/**
 * Inject Customizer CSS when appropriate
 */

<<<<<<< HEAD
function clashvibes_customizer_css()
{
    $header_color = get_theme_mod('clashvibes_header_color');
    
    ?>

<style type="text/css">
            .site-branding {
                    background: <?php echo get_theme_mod('clashvibes_header_color'); ?>;
                    background-color: <?php echo $header_color; ?>
            }

            .category-list a:hover,
            .entry-meta a:hover,
            .tag-links a:hover,
            .widget-area a:hover,
            .nav-links a:hover,
            .comment-meta a:hover,
            .continue-reading a,
            .entry-title a:hover,
            .entry-content a,
            .comment-content a {
                    color: <?php echo get_theme_mod('clashvibes_link_color'); ?>;
            }

            .border-custom {
                    border: <?php echo get_theme_mod('clashvibes_link_color'); ?> solid 1px;
            }

    </style>
    <?php
}
add_action('wp_head', 'clashvibes_customizer_css');
=======
function clashvibes_customizer_css() {
	$header_color = get_theme_mod('clashvibes_header_color');
	
	?>

<style type="text/css">
			.site-branding {
					background: <?php echo get_theme_mod( 'clashvibes_header_color' ); ?>;
					background-color: <?php echo $header_color; ?>
			}

			.category-list a:hover,
			.entry-meta a:hover,
			.tag-links a:hover,
			.widget-area a:hover,
			.nav-links a:hover,
			.comment-meta a:hover,
			.continue-reading a,
			.entry-title a:hover,
			.entry-content a,
			.comment-content a {
					color: <?php echo get_theme_mod( 'clashvibes_link_color' ); ?>;
			}

			.border-custom {
					border: <?php echo get_theme_mod( 'clashvibes_link_color' ); ?> solid 1px;
			}

	</style>
	<?php
}
add_action( 'wp_head', 'clashvibes_customizer_css' );
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
