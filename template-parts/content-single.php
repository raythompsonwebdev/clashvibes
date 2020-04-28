<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

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
			

			<?php endif; ?>

		
		<!--featured Image end-->

		<div class="entry-content">
			<?php
				the_content();

				?>
		</div><!-- .entry-content -->
		<br/>
		<br/>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php clashvibes_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
		
</article>


