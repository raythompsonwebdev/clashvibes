<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>


		<?php
		the_archive_title('<h2 class="page-title">', '</h2>');
		the_archive_description('<div class="archive-description">', '</div>');
		?>


	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content', 'archive');

		endwhile;

	endif;
	?>

</main>

<?php
get_sidebar();
get_footer();
