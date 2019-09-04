<?php
/**
 * *PHP version 7
 *
 * *
 * Sidebar Audio | core/sidebar-audio.php.
 *
 * @category   Sidebar_Audio
 * @package    Clashvibes
 * @subpackage Sidebar_Audio
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<aside id="clashvibes_left_column">

	<h1>
		<?php esc_html_e( 'Search Audio', 'clashvibes' ); ?>
	</h1>

	<section id="clashvibes_login">
		<?php get_search_form(); ?>
	</section>

	<div class="blog_box">

		<?php
			wp_nav_menu(
				array(
					'menu'      => 'Audio-Nav',
					'container' => 'nav',
				)
			);
		?>

	</div>

	<div class="clearfix"></div>
</aside>