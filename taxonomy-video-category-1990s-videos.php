<?php
/**
 * *PHP version 5
 *
 * Taxonomy Video 1990s | core/taxonomy-video-category-1990s-videos.php.
 *
 * @category   Taxonomy_Video_1990s
 * @package    Clashvibes
 * @subpackage Taxonomy_Video_1990s
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

?>
<div id="clashvibes_content">

	<?php get_sidebar( 'video' ); ?>

	<section id="clashvibes_right_column">



		<?php $archivetitle = apply_filters( 'the_title', $term->name ); ?>

		<h1 class="archive-title">Video Category:
			<?php echo esc_html($archivetitle); ?>
		</h1>

		<?php get_template_part( 'template-parts/content', 'custom' ); ?>


	</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>