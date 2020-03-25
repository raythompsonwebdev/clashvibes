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
 * 
 */

 get_header(); ?>

<?php get_sidebar(); ?>

<section id="clashvibes_right_column">
<!--Post loop start -->
<?php if ( have_posts() ) : 

the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );?>

	<?php while ( have_posts() ) : the_post();	?>
				
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<div class="entry-meta">
			<?php
				clashvibes_posted_on();
				clashvibes_posted_by();
			?>
		</div><!-- .entry-meta -->
			<?php
		endif;
		?>
	</header><!-- .entry-header -->
	<!--featured Image-->
	
	<?php if ( has_post_thumbnail() ) : ?>

		<?php clashvibes_post_thumbnail(); ?>

	<?php endif; ?>
		<div class="entry-content">
		<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clashvibes' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			
			?>
		</div><!-- .entry-content -->
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
					<?php clashvibes_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article>

<!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</section><!-- end of right panel -->


<?php get_footer(); ?>
