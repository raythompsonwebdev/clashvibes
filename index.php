<?php
/**
 * *PHP version 5
 *
 * Index page | core/index.php.
 *
 * @category   Index_Page
 * @package    Clashvibes
 * @subpackage Index_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<div id="clashvibes_content">
    <?php get_sidebar(); ?>

    <section id="clashvibes_right_column">


        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


    </section><!-- end of right panel -->

</div>
<?php get_footer(); ?>