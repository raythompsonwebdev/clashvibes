<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

?>

<?php if (have_posts()) : ?>

	<header class="page-header">
		<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		?>
	</header>

	<?php
	// Start the Loop.
	while (have_posts()) :
		// You can list your posts here
		the_post();
	?>
		<header class="entry-header">
			<?php
			if (is_archive()) :
				the_title('<h2 class="entry-title">', '</h2>');
			else :
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

			<figure class="post-thumbnail">

				<a href="#" aria-hidden="true" title="no image available">

					<img src="<?php echo esc_url(home_url('/') . 'wp-content/uploads/sites/2/2021/02/nothing.jpg'); ?>" alt="<?php esc_attr_e('No image Available', 'clashvibes'); ?>" rel="prefetch" />

				</a>
			</figure><!-- featured-image -->
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
		</div><!-- .entry-content -->
		</div>
<?php
	endwhile;

	// Navigation
	the_post_navigation();
else :
// No Post Found
endif;
?>
