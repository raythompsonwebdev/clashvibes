<?php

/**
 * Template part for displaying posts content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
	<header class="entry-header">
		<?php
		if (is_home() || is_single()) :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				clashvibes_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--featured Image-->
	<?php if (has_post_thumbnail()) : ?>

		<?php clashvibes_post_thumbnail(); ?>

	<?php else : ?>


	<?php endif; ?>
	<div class="entry-content">
		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'clashvibes'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'clashvibes'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
