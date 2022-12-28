<?php

/**
 * PHP version 8.1
 *
 * Template Name: Contact
 *
 * Contact page | core/page-contact.php.
 *
 * @category   Contact_Page
 * @package    Clashvibes
 * @subpackage Contact_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();

?>

<h2><?php the_title(); ?> Page</h2>
<div id="contactform">
	<?php the_content(); ?>
</div>
<?php
get_footer();
