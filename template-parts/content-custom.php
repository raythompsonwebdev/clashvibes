<?php
/**
 * Template part for displaying custom audio player .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 */
?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

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
			
									<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
										
											<img src="<?php echo home_url( '/' ); ?>wp-content/uploads/2020/03/placeholder-1.jpg"
												alt="<?php esc_attr_e( 'No image Available', 'raythompsonwebdev-com' ); ?>" rel="prefetch" />
										
								</a>
															
							<?php endif; ?>

	</a>
	
	<div class="entry-content">
		<?php
		the_excerpt();

		?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="read_more" rel="bookmark">
			<?php
			if(is_tax('video-category')){

				esc_html(the_title("Continue Watching : "), 'clashvibes');

			}elseif(is_tax('audio-category')){

				esc_html(the_title("Continue Listening : "), 'clashvibes');

			}else{

				esc_html(the_title("Continue : "), 'clashvibes');
			}
				
			?>
	</a>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
		
	<?php endwhile;  else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<!--end of Comment box-->
</article>
