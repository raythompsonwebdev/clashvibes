<?php

/**
 * *PHP version 8.1.9
 *
 * This is the template that displays the area of the page that contains archives
 *
 * Archives Page | core/archives.php.
 *
 * @category   Archives Page
 * @package    Clashvibes
 * @subpackage Archives Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>


		<?php
		the_archive_title('<h2 class="page-title">', '</h2>');
		?>


		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'archive');

		endwhile;
		?>

	<?php else : ?>
	<?php

		get_template_part('template-parts/content', 'none');

	endif;
	?>


</main>

<?php
get_sidebar();
get_footer();
