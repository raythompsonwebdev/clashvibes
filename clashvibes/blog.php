<<<<<<< HEAD
<?php
/*

  Template Name: blog

 */
?>
<?php get_header(); ?>



<div id="clashvibes_content">
<?php get_sidebar(); ?>

<section id="clashvibes_right_column">

<!--Post loop start -->
    <?php if (have_posts()) : ?>

   <?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/content', get_post_format()); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</section><!-- end of right panel -->

</div>
=======
<?php
/**
 * *PHP version 5
 * 
 * Template Name: blog 
 *
 * Blog page | core/blog.php.
 *
 * @category   Blog_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Blog_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>



<div id="clashvibes_content">
<?php get_sidebar(); ?>

<section id="clashvibes_right_column">

<!--Post loop start -->
    <?php if (have_posts()) : ?>

   <?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/content', get_post_format()); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</section><!-- end of right panel -->

</div>
>>>>>>> 9fbc4300d8ebb1da52ad1d1e8f23532c220590fc
<?php get_footer(); ?>