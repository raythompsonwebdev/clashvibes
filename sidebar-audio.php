<?php

/**
 *
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
<!--id="secondary"-->
<aside id="secondary" class="widget-area">

	<h2 id="secondary-header">
		<?php esc_html_e('Audio', 'clashvibes'); ?>
	</h2>

	<section id="clashvibes-login">
		<?php get_search_form(); ?>
	</section>

	<!--class="widget"-->
	<section class="sidebar-navigation">

		<?php
		wp_nav_menu(
			array(
				'menu'           => 'Audio-Nav',
				'container'      => 'nav',
				'theme_location' => 'audio-nav',
			)
		);
		?>

	</section>

</aside>
