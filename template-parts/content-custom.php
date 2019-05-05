<?php
/**
 * Template part for displaying custom audio player .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 * 
 */
?>

<?php if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>


<article class="post group" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
		else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

		<div class="entry-meta">
		<?php
		clashvibes_posted_on();
		clashvibes_posted_by();
		?>
		</div><!-- .entry-meta -->


	</header><!-- .entry-header -->
	
	<?php clashvibes_post_thumbnail(); ?>

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
					), get_the_title()
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
	
	<?php if ( get_edit_post_link() ) : ?>

		<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php endif; ?>
		
	<?php endwhile;  else :	?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<!--end of Comment box-->
</article>
