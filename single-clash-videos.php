<?php

/**
 * *PHP version 8.1
 *
 * Single Clash Video page | core/single-clash-video.php.
 *
 * @category   Single_Clash_Video_Page
 * @package    Clashvibes
 * @subpackage Single_Clash_Video_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

<?php get_sidebar('video'); ?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/content', 'video'); ?>

</main>


<?php get_footer(); ?>
