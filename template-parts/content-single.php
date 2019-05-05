<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 * 
 */
?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();	?>

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
							),
							get_the_title()
						)
					);

					$default = array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clashvibes' ),
						'after'  => '</div>',
					);
					wp_link_pages($default);
					
					?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php endif; ?>
		
	</article>

<?php endwhile;	?>

<div class="navigation">
	<h2><?php esc_html_e( 'Navigation', 'clashvibes' ); ?></h2>
	<?php previous_post_link('<span>%link</span>'); ?>
	<?php next_post_link('<span>%link</span>'); ?>
</div>

<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>