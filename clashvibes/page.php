<?php
/**
 * *PHP version 5
 * 
 * Page | core/page.php.
 *
 * @category   Page
 * @package    Clashvibes
 * @subpackage Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>
	  

	<div id="clashvibes_content">

<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="clashvibes_right_panel_fullwidth">

<h1><?php the_title(); ?></h1>

     
<?php the_content('Read More...'); ?>
</section>
           
		  
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!', 'clashvibes'); ?></p>
<?php endif; ?>
        


      </section>


<?php get_footer(); ?>



   
 




