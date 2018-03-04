
<?php get_header(); ?>
	  


<div id="clashvibes_content">
    <?php get_sidebar('video'); ?>
 	
<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
<h1 class="entry-title">
    <span>Sound Clash Video:</span> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h1>

<section class="byline"> 
    <span>Uploaded by :<?php the_author() ?></span>
    <span> Date: <?php the_time('jS F Y') ?></span>
    <span> at :<?php the_time('g:i a'); ?></span>
</section>

</header>
                              
<?php get_template_part('template-parts/content' , 'video'); ?>

<br/>
 
 
 
 <footer class="speaker-meta">

<?php the_meta(); ?>
</footer>


</article>
<?php endwhile; else: ?>
<?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

</section><!-- end of clashvibes_right_panel_fullwidth -->
</div>
<?php get_footer(); ?>




