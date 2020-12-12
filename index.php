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


    <?php get_sidebar(); ?>

    <section id="clashvibes_right_column">

    <h1><?php esc_html_e('Blog Page', 'clashvibes');?></h1>

        <!--Post loop start -->
		<?php if ( have_posts() ) : ?>

        <?php
            while ( have_posts() ) :
            the_post();
        ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>


    </section><!-- end of right panel -->


<?php get_footer(); ?>
