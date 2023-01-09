<?php

/**
 * *PHP version 8.1.9
 *
 * Single Clash Events page | core/single-clash_events.php.
 *
 * @category   Single_Clash_Events_Page
 * @package    Clashvibes
 * @subpackage Single_Clash_Events_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<?php get_sidebar( 'events' ); ?>

<main id="primary" class="site-main">

	<?php get_template_part( 'template-parts/content', 'events' ); ?>

</main>

<?php get_footer(); ?>
