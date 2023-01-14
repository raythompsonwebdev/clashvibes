<?php

/**
 * *PHP version 8.1
 *
 * Search page | core/search.php.
 *
 * @category   Search
 * @package    Clashvibes
 * @subpackage Search
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<h2 class="page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'clashvibes' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h2>


		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'search' );
		endwhile;
		the_posts_navigation();
		?>

		<?php
	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main>

<?php
get_sidebar();
get_footer();
