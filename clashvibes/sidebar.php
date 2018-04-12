<aside id="clashvibes_left_column">

 <h1>Search</h1>

<section id="clashvibes_login">
    <?php get_search_form(); ?>
</section>

<article class="blog_box">
    
    <?php if ( !function_exists( 'dynamic_sidebar' ) || 
    !dynamic_sidebar('Primary Sidebar') ) : ?>               
        
    <article class="widget">
        <h3 class="widget-title">Links</h3>

        </article>
    <?php endif; ?>

</article>
      
                                            
</aside>

