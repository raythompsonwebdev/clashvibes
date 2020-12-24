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

		<?php if ( is_front_page() || is_page('events') || is_page('contact') || is_page('clashaudio') || is_page('clashvideos')  ) : ?>

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
				<section id="clashvibestitle">

						<?php	if ( is_front_page() && is_home() ) :	?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
								</a>
							</h1>
							<?php	else :	?>
								<p class="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
									</a>
								</p>
							<?php	endif;

								$clashvibes_description = get_bloginfo( 'description', 'display' );
								if ( $clashvibes_description || is_customize_preview() ) :	?>

								<h2 class="site-description">
									<?php echo esc_html( $clashvibes_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</h2>

						<?php	endif;	?>

				</section>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clashvibes' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->

		<!--Main navigation-->
		<nav id="cv-mobilenav">

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
		<nav id="cv-mainnav">

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
