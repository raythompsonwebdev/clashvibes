<?php
/**
 * *PHP version 5
 * 
 **
 * Sidebar Video | core/sidebar-video.php.
 *
 * @category   Sidebar_Video
 * @package    Clashvibes
 * @subpackage Sidebar_Video
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 ?>

<aside id="clashvibes_left_column">

 <h1><?php esc_html__('Search Video', 'clashvibes'); ?></h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>
<div class="blog_box">

<?php wp_nav_menu( array('menu' => 'Video-Nav', 'container' => 'nav' )); ?>
       
</div>


 <div class="clearfix"></div>
                                            
</aside>

