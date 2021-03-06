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
function clashvibes_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

  // Create header background color setting
	$wp_customize->add_setting( 'header_color', array(
		'default' => '#F2f2f2',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
  ));

  // Add header background color control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_color', array(
				'label' => __( 'Header Background Color', 'clashvibes' ),
				'section' => 'colors',
			)
		)
  );

  // Add section to the Customizer
	$wp_customize->add_section( 'clashvibes-options', array(
		'title' => __( 'Theme Options', 'clashvibes' ),
		'capability' => 'edit_theme_options',
		'description' => __( 'Change the default display options for the theme.', 'clashvibes' ),
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
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
add_action( 'customize_register', 'clashvibes_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function clashvibes_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function clashvibes_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clashvibes_customize_preview_js() {
	wp_enqueue_script( 'clashvibes-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'clashvibes_customize_preview_js' );

/**
 * Inject Customizer CSS when appropriate
 */

function clashvibes_customizer_css() {
	$header_color = get_theme_mod( 'clashvibes_header_color' );
	$link_color   = get_theme_mod( 'clashvibes_link_color' );

	?>

	<style type="text/css">
			.site-branding {
					background: <?php echo esc_html( $header_color ); ?>;
					background-color: <?php echo esc_html( $header_color ); ?>
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
					color: <?php echo esc_html( $link_color ); ?>;
			}

			.border-custom {
					border: <?php echo esc_html( $link_color ); ?> solid 1px;
			}

	</style>
	<?php
}
add_action( 'wp_head', 'clashvibes_customizer_css' );
