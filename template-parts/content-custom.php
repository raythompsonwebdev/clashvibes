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
	while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				clashvibes_posted_on();
				clashvibes_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--featured Image-->
	<a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

		<?php if ( has_post_thumbnail() ) : ?>

			<?php clashvibes_post_thumbnail(); ?>

		<?php else : ?>

			<figure class="featuredImage">
				
				<img src="<?php echo esc_url('https://site.test/wordpress/wp-content/themes/clashvibes/images/placeholder.jpg','display');?>" alt="<?php echo esc_attr_e('No image Available','raythompsonwebdev-com');?>" rel="prefetch" />
				
			</figure>

		<?php endif; ?>

	</a>
	
	<div class="entry-summary">
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
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
		
	<?php endwhile;  else :	?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<!--end of Comment box-->
</article>
