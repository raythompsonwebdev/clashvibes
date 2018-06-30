<?php
/**
 * *PHP version 5
 *
 * Category page | core/category.php.
 *
 * @category   Category_Page
 * @package    Clashvibes
 * @subpackage Category_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">

	<section id="clashvibes_right_column">

		<h1 class="archive-title">Categories: <?php single_cat_title(); ?></h1>

		<!--Post loop start -->
		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>


		</article><!-- end of news -->


	</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
