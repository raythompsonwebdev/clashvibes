<?php

/**
 *
 *
 * Template Name: Faqs
 *
 * Faqs page | core/page-faqs.php.
 *
 * @category   Faqs_Page
 * @package    Clashvibes
 * @subpackage Faqs_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<h2 class="page-title"><?php echo esc_html(get_the_title()); ?></h2>

<?php

while (have_posts()) :
	the_post();

	get_template_part('template-parts/content', 'page');


endwhile;
?>


<?php
get_footer();
