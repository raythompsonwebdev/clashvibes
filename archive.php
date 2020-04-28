<?php
/**
 * *PHP version 5
 *
 * Archive page | core/archive.php.
 *
 * @category   Archive_Page
 * @package    Clashvibes
 * @subpackage Archive_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 get_header(); ?>

<?php get_sidebar(); ?>

<section id="clashvibes_right_column">
	<!--Post loop start -->
	<?php if ( have_posts() ) : 

		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		
	?>

		<?php while ( have_posts() ) : the_post();	
					
			get_template_part( 'template-parts/content', get_post_type() );

		?>
		<!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>

	<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</section><!-- end of right panel -->


<?php get_footer(); ?>
