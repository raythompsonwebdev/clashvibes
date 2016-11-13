  <?php get_header(); ?>
	  
<div id="clashvibes_content">
 	
<section id="clashvibes_right_column">
      

<section class="clashvibes_right_panel_fullwidth">


<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>    
<article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">

<header class="entry-header">
<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>     

<section class="byline"> Date <?php the_time('jS F Y') ?> at <?php the_time('g:i a'); ?><br />
Written by <?php the_author() ?></section>
</header>
    
<figure class="thumb"><?php the_post_thumbnail(); ?></figure> 

<?php the_content(); ?>

<br/>     

<div class="navi">

 <div class="right">Next:- <?php previous_post_link(); ?> </div>
<div class="left">Previous: <?php next_post_link(); ?></div>

</div>
      
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
      
</article>

</section><!-- end of clashvibes_right_panel_fullwidth -->
	

</section><!-- end of right panel -->
<?php get_footer(); ?>


