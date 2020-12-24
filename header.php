<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clashvibes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<span id="tog-menu">

		<?php if ( is_front_page() || is_page( 'events' ) || is_page( 'contact' ) || is_page( 'clashaudio' ) || is_page( 'clashvideos' ) ) : ?>

			<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>


				<?php else : ?>

			<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

			<button id="sidebar_toggle" class="sidebar-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'SideBar', 'clashvibes' ); ?></button>


			<?php endif; ?>
	</span>

<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'clashvibes' ); ?></a>

		<header id="masthead" class="site-header">

			<div class="site-branding">

				<!--site logo-->
				<div class="site-logo">
						<?php $site_title = get_bloginfo( 'name' ); ?>
							<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<div class="screen-reader-text">

										<?php
											/* translators: %1$s:, CMSname: WordPress. */
											printf( esc_html_e( 'Go to the home page of %1$s', 'clashvibes' ), esc_html( $site_title ) );
										?>

								</div>
										<?php

										if ( has_custom_logo() ) :
											the_custom_logo();
											else :

												?>
										<div class="site-firstletter" aria-hidden="true">
												<?php echo esc_html( substr( $site_title, 0, 1 ) ); ?>
										</div>

								<?php endif; ?>

							</a>
				</div>

					<!--header title-->
				<section id="clashvibes-title">

							<h1 class="site-title">
							<?php esc_html_e( 'Clashvibes', 'clashvibes' ); ?>
						</h1>
									<?php

									$clashvibes_description = get_bloginfo( 'description', 'display' );
								if ( $clashvibes_description || is_customize_preview() ) :
									?>

									<h2 class="site-description">
										<?php echo esc_html( $clashvibes_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									</h2>

							<?php	endif; ?>

				</section>

			</div><!-- .site-branding -->

			<!--Social Media Icons-->
			<aside id="socialmediatop">

				<a class="social-icon linkedin-icon"	href="<?php echo esc_url( __( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'clashvibes' ) ); ?>"	target="new"	title= <?php esc_attr_e("Follow me on LinkedIn", 'clashvibes'); ?>><span><i class="fa fa-instagram"></i></span></a>

				<a class="social-icon twitter-icon"	href="<?php echo esc_url( __( 'http://twitter.com/RayThompWeb', 'clashvibes' ) ); ?>"	target="new"	title=<?php esc_attr_e("Follow me on Twitter", 'clashvibes'); ?>><span>	<i class="fa fa-twitter"></i>	</span></a>

				<a class="social-icon facebook-icon"
					href="<?php echo esc_url( __( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes' ) ); ?>"	target="new"	title=<?php esc_attr_e("Follow me on Facebook", 'clashvibes'); ?>>	<span><i class="fa fa-facebook"></i></span></a>

				<a class="social-icon facebook-icon"	href="<?php echo esc_url( __( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes' ) ); ?>"	target="new"	title=<?php esc_attr_e("Follow me on Facebook", 'clashvibes'); ?>>	<span>	<i class="fa fa-facebook"></i></span>
				</a>

			</aside>


		</header><!-- #masthead -->

		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clashvibes' ); ?></button> -->

		<!--Main navigation-->
		<nav id="cv-mobilenav" class="mobile-navigation">

			<?php
			wp_nav_menu(
				array(
					'menu'           => 'Mobile',
					'container'      => 'ul',
					'fallback_cb'    => false,
					'theme_location' => 'mobile',
				)
			);
			?>

		</nav>

		<!--Main navigation-->
		<nav id="cv-mainnav" class="main-navigation">

			<?php
			wp_nav_menu(
				array(
					'menu'           => 'Main Nav',
					'container'      => 'ul',
					'fallback_cb'    => false,
					'theme_location' => 'main',
				)
			);
			?>

		</nav>

<div class="clashvibes-content">
