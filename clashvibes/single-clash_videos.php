<?php
/**
 * *PHP version 5
 * 
 * Single Clash Video page | core/single-clash_video.php.
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
	  

<div id="clashvibes_content">
    <?php get_sidebar('video'); ?>
 	
<section id="clashvibes_right_column">
      
                              
<?php get_template_part('template-parts/content' , 'video'); ?>

</section><!-- end of clashvibes_right_panel_fullwidth -->
</div>
<?php get_footer(); ?>




