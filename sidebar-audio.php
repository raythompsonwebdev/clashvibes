<aside id="clashvibes_left_column">

 <h1>Search Audio</h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>

<div class="blog_box"> 

<?php wp_nav_menu( array('menu' => 'Audio-Nav', 'container' => 'nav' )); ?>
       
</div>
 
    <?php if ( !function_exists( 'dynamic_sidebar' ) || 
    !dynamic_sidebar('Audio-Nav') ) : ?>               
        
  
    <?php endif; ?>

       <div class="clearfix"></div>                                      
</aside>
