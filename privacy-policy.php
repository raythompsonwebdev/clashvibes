<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

get_header();
?>

<main id="primary" class="site-main">

	<h2 class="page-title"><?php echo esc_html( get_the_title() ); ?></h2>

	<?php

	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile;
	?>

</main>

<?php
get_sidebar();
get_footer();