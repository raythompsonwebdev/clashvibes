<?php
/**
 * *PHP version 5
 *
 * Template Name: Faqs
 *
 * Faqs page | core/page-faqs.php.
 *
 * @category   Faqs_Page
 * @package    Clashvibes
 * @subpackage Faqs_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<div id="clashvibes_content_front">

	<section id="clashvibes_right_column_front">

		<h1>
			<?php the_title(); ?> Page</h1>

		<?php the_content(); ?>

	</section><!-- end of right panel -->
</div>
<?php get_footer(); ?>
