<aside id="clashvibes_left_column">

 <h1>Search Video</h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>
<div class="blog_box">

<?php wp_nav_menu( array('menu' => 'Video-Nav', 'container' => 'nav' )); ?>
       
</div>
 
    <?php if ( !function_exists( 'dynamic_sidebar' ) || 
    !dynamic_sidebar('Video-Nav') ) : ?>               
   
    <?php endif; ?>


 <div class="clearfix"></div>
                                            
</aside>

