<?php
/**
 * *PHP version 7
 *
 * Taxonomy Video Old | core/taxonomy-video-category-old-school-videos.php.
 *
 * @category   Taxonomy_Video_Old
 * @package    Clashvibes
 * @subpackage Taxonomy_Video_Old
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

 get_header();

 $videoterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>


	<?php get_sidebar( 'video' ); ?>

	<main id="primary" class="site-main">



		<?php $archivetitle = apply_filters( 'the_title', $videoterm->name ); ?>

		<h1 class="archive-title">Video Category:
			<?php echo esc_html( $archivetitle ); ?>
		</h1>

		<?php get_template_part( 'template-parts/content', 'custom' ); ?>


	</main><!-- end of right panel -->


<?php get_footer(); ?>
