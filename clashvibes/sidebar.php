<?php
/**
 * *PHP version 5
 * 
 **
 * Sidebar | core/sidebar.php.
 *
 * @category   Sidebar
 * @package    Clashvibes
 * @subpackage Sidebar
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 ?>

<aside id="clashvibes_left_column">

 <h1>Search</h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>

<article class="blog_box">
    
    <?php if ( !function_exists( 'dynamic_sidebar' ) || 
    !dynamic_sidebar('Primary Sidebar') ) : ?>               
        
    <article class="widget">
        <h3 class="widget-title"><?php esc_html__('Links', 'clashvibes'); ?></h3>

        </article>
    <?php endif; ?>

</article>
      
                                            
</aside>

