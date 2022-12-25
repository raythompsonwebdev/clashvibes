<?php

/**
 * *PHP version 7
 *
 * Taxonomy Page | core/taxonomy.php.
 *
 * @category   Taxonomy_Page
 * @package    Clashvibes
 * @subpackage Taxonomy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<?php get_sidebar(); ?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<article class="post group" <?php post_class(); ?> id="post-
			<?php the_ID(); ?>">

			<header class="entry-header">
				<h2 class="page-title">
					<?php
					$clashvibes_current_term = get_queried_object();
					$clashvibes_taxonomy     = get_taxonomy( $clashvibes_current_term->taxonomy );
					echo esc_html( $clashvibes_taxonomy->label ) . ':' . esc_html( $clashvibes_current_term->name );
					?>
				</h2>
				<?php
				// Show an optional term description.
				$clashvibes_term_description = term_description();
				if ( ! empty( $clashvibes_term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', esc_html( $clashvibes_term_description ) );
				endif;
				?>
			</header><!-- .page-header -->

			<?php
			if ( is_author() && get_the_author_meta( 'description' ) ) {
				echo '<div class="author-index shorter">';
				get_template_part( 'inc/author', 'box' );
				echo '</div>';
			}
			?>

			<?php /* Start the Loop */ ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<figure class="thumb">
					<?php clashvibes_post_thumbnail(); ?>
				</figure>

				<div class="entry-content">
					<?php
					the_content(
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

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clashvibes' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>

				<footer class="entry-footer">
					<?php clashvibes_entry_footer(); ?>
				</footer>
		</article>

	<?php endwhile; ?>
<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>


</main><!-- end of right panel -->

<?php get_footer(); ?>
