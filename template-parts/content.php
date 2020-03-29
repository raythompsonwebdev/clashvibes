<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

?>

<!--Post loop start -->
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>


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

					<?php else : ?>

						<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							
								<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2020/03/placeholder-1.jpg"
									alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
							
					</a>
												
				<?php endif; ?>

	
	<!--featured Image end-->

	<div class="entry-content">
			<?php
			the_excerpt();

			?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="read_more" rel="bookmark">
			<?php
				esc_html(the_title("Continue Reading : "), 'clashvibes');
			?>
	</a>
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


<div class="clearfix"></div>
