<?php
/**
 * *PHP version 5
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
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<!DOCTYPE html >
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php if ( is_search() ) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
			

 <button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'clashvibes' ); ?></button>

	
<div id="container">

	<header>
	<div class="site-logo">
		<?php $site_title = get_bloginfo( 'name' ); ?>
		<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<div class="screen-reader-text">
				<?php printf( esc_html_e( 'Go to the home page of %1$s', 'clashvibes' ), $site_title ); ?>
			</div>
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<div class="site-firstletter" aria-hidden="true">
					<?php echo substr( $site_title, 0, 1 ); ?>
				</div>
			<?php } ?>
		</a>
	</div>
		<section id="clashvibes_title">
			
			<h1><?php esc_html_e( 'Clashvibes', 'clashvibes' ); ?></h1>
			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( esc_html( $description ) || is_customize_preview() ) :
				?>

				<h2 class="site-description"><?php echo $description; ?></h2>
	
		<?php endif; ?>
		</section>

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
<?php if ( ! is_front_page() ) : ?>

	<button id="side-bar-btn" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'SideBar', 'clashvibes' ); ?></button>

	<?php else : ?>

	<button id="side-bar-btn" tyle="display:none" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'SideBar', 'clashvibes' ); ?></button>

	
		<?php endif; ?>
