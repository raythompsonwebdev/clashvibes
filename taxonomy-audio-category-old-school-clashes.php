<<<<<<< HEAD
<?php
/**
 * *PHP version 5
 * 
 * Taxonomy Audio Old | core/taxonomy-audio-category-old-school-clashes.php.
 *
 * @category   Taxonomy_Audio_Old
 * @package    Clashvibes
 * @subpackage Taxonomy_Audio_Old
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 get_header(); ?>
<div id="clashvibes_content">

        <?php get_sidebar('audio'); ?>

        <section id="clashvibes_right_column">



                <h1 class="archive-title">Audio Category:
                        <?php echo apply_filters( 'the_title', esc_html($term->name) ); ?>
                </h1>

                <?php get_template_part('template-parts/content', 'custom'); ?>


        </section><!-- end of right panel -->

</div>
=======
<?php
/**
 * *PHP version 5
 * 
 * Taxonomy Audio Old | core/taxonomy-audio-category-old-school-clashes.php.
 *
 * @category   Taxonomy_Audio_Old
 * @package    Clashvibes
 * @subpackage Taxonomy_Audio_Old
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 get_header(); ?>
<div id="clashvibes_content">

        <?php get_sidebar('audio'); ?>

        <section id="clashvibes_right_column">



                <h1 class="archive-title">Audio Category:
                        <?php echo apply_filters( 'the_title', esc_html($term->name) ); ?>
                </h1>

                <?php get_template_part('template-parts/content', 'custom'); ?>


        </section><!-- end of right panel -->

</div>
>>>>>>> bc1944fe441a0e0cadfc83377897907ee587aa6c
<?php get_footer(); ?>