<?php
/**
 * *PHP version 7
 *
 * Single page | core/single.php.
 *
 * @category   Single_Page
 * @package    Clashvibes
 * @subpackage Single_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

	<?php get_sidebar(); ?>

	<section id="clashvibes_right_column">

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

	</section>


<?php get_footer(); ?>