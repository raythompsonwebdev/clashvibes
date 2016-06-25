  <?php get_header(); ?>
	  
<?php get_sidebar(); ?>
	<div id="clashvibes_content">
 	
<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<article class="clashvibes_right_panel_fullwidth">

<h1><?php the_title(); ?></h1>

<section class="byline">by <?php the_author_posts_link(); ?> 
on <a><span class="date"><?php the_time('l F d, Y'); ?></span></a> 
</section> 

<article class="thumb"><?php the_post_thumbnail(); ?></article>    
<?php the_content(); ?>

      <br/>     
<div class="navi">
<div class="right">Next: <?php previous_post_link(); ?> </div>
<div class="left">Previous: <?php next_post_link(); ?></div>
</div>
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
        


     

</article><!-- end of clashvibes_right_panel_fullwidth -->
	

</section><!-- end of right panel -->
<?php get_footer(); ?>


