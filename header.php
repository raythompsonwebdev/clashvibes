<?php
/**
 * *PHP version 7
 *
 * Header | core/front-page.php.
 *
 * @category   Header
 * @package    Clashvibes
 * @subpackage Header
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 * 
 */
?>
<!DOCTYPE html >
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<?php if ( is_search() ) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<?php if ( is_front_page()) : ?>

		<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

		<?php elseif(is_home()) : ?>

		<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

		<button id="toggle-side" class="sidebar-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'SideBar', 'clashvibes' ); ?></button>

		<?php elseif(is_page()) : ?>

		<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

		<?php elseif(is_post_type_archive()) : ?>
		<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

		<?php else : ?>

		<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>
	
		<button id="toggle-side" class="sidebar-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'SideBar', 'clashvibes' ); ?></button>

	<?php endif; ?>

	<div id="container">

		<header>
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
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
					<div class="site-firstletter" aria-hidden="true">
						<?php echo esc_html( substr( $site_title, 0, 1 ) ); ?>
					</div>
					<?php } ?>
				</a>
			</div>
			<section id="clashvibes_title">

				<h1>
					<?php esc_html_e( 'Clashvibes', 'clashvibes' ); ?>
				</h1>
				<?php
				$description = get_bloginfo( 'description', 'display' );

				if ( esc_html( $description ) || is_customize_preview() ) :
					?>

				<h2 class="site-description">
					<?php echo esc_html( $description ); ?>
				</h2>

				<?php endif; ?>
			</section>
			<span id="socialmediatop">

				
					<a class="social-icon linkedin-icon" 
						href="" 
						target="new" 
						title="Follow me on LinkedIn">
						<span>
							<i class="fa fa-instagram"></i>
						</span>
					</a>
				

				
					<a class="social-icon twitter-icon" 
					href="<?php echo esc_url( __( 'http://twitter.com/RayThompWeb', 'clashvibes' ) ); ?>" 
					target="new" 
					title="Follow me on Twitter">
					<span>
						<i class="fa fa-twitter"></i>
					</span>
					</a>
				

				
					<a class="social-icon facebook-icon" href="<?php echo esc_url( __( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes' ) ); ?>" 
					target="new" 
					title="Follow me on Facebook">
					<span>
						<i class="fa fa-facebook"></i>
					</span>
					</a>

					<a class="social-icon facebook-icon" href="<?php echo esc_url( __( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes' ) ); ?>" 
					target="new" 
					title="Follow me on Facebook">
					<span>
						<i class="fa fa-facebook"></i>
					</span>
					</a>
				


				</span>		
		</header>


		<nav>
			<ul>
				<?php
				wp_nav_menu(
					array(
						'menu'      => 'Main',
						'container' => 'nav',
					)
				);
				?>
			</ul>
		</nav>
