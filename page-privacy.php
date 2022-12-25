<?php

/**
 * *PHP version 7
 *
 * Template Name: Privacy
 *
 * Privacy page | core/page-privacy.php.
 *
 * @category   Privacy_Page
 * @package    Clashvibes
 * @subpackage Privacy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<?php

esc_html( the_title( '<h2 class="page-title">', ' Page</h2>' ) );

while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content', 'page' );

	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile;
?>

<?php
get_footer();
