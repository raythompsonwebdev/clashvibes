<<<<<<< HEAD
<?php get_header(); ?>
=======
<?php
/**
 * *PHP version 5
 * 
 * Single Clash Audio page | core/single-clash_audio.php.
 *
 * @category   Single_Clash_Audio_Page
 * @package    Clashvibes
 * @subpackage Single_Clash_Audio_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>
>>>>>>> 9fbc4300d8ebb1da52ad1d1e8f23532c220590fc

<div id="clashvibes_content">
<?php get_sidebar('audio'); ?>
    <section id="clashvibes_right_column">

<?php get_template_part('template-parts/content', 'audio'); ?>

    </section><!-- end of clashvibes_right_panel_fullwidth -->

</div><!-- end of right panel -->

<?php get_footer(); ?>
