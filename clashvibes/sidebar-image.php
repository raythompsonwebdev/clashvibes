<?php
/**
 * *PHP version 5
 * 
 **
 * Sidebar Image | core/sidebar-audio.php.
 *
 * @category   Sidebar_Image
 * @package    Clashvibes
 * @subpackage Sidebar_Image
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 ?>

<aside id="clashvibes_left_column">

 <h1><?php esc_html__('Images', 'clashvibes'); ?></h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>

<article class="blog_box">
    
    <?php if ( !function_exists( 'dynamic_sidebar' ) || 
    !dynamic_sidebar('Primary Sidebar') ) : ?>               
        
    
    <?php endif; ?>

</article>
      
                                            
</aside>

