<?php
/**
 * *PHP version 7
 *
 * Template part for displaying results in search pages
 *
 * Index page | core/search.php.
 *
 * @category   Search_Page
 * @package    Clashvibes
 * @subpackage Search_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<div id="clashvibes_content">

	<?php get_sidebar(); ?>

	<section id="clashvibes_right_column">
	

		<?php get_template_part( 'template-parts/content', 'custom' ); ?>

	</section>
</div>

<?php get_footer(); ?>
