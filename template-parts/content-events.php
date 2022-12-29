<?php

/**
 * Template part for displaying custom events.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h2 class="entry-title">', '</h2');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				clashvibes_posted_on();

				?>
			</div>
		<?php endif; ?>
	</header>

	<!--featured Image-->
	<?php if (has_post_thumbnail()) : ?>

		<?php clashvibes_post_thumbnail(); ?>

	<?php else : ?>

		<figure class="post-thumbnail">

			<a href="#" aria-hidden="true" title="no image available">

				<img src="<?php echo esc_url(home_url('/') . 'wp-content/uploads/2022/12/no-image.jpg'); ?>" alt="<?php esc_attr_e('No image Available', 'clashvibes'); ?>" rel="prefetch" />

			</a>
		</figure>

	<?php endif; ?>

	<div class="entry-content">

		<?php
		the_content(
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

	</div>

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
