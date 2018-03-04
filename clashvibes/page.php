<?php get_header(); ?>
	  

	<div id="clashvibes_content">

<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="clashvibes_right_panel_fullwidth">

<h1><?php the_title(); ?></h1>

     
<?php the_content('Read More...'); ?>
</section>
           
		  
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
        


      </section>


<?php get_footer(); ?>



   
 




