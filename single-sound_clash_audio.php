<?php get_header(); ?>
	  
<?php get_sidebar(); ?>

<div id="clashvibes_content">
 	
<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
<h1 class="entry-title"><span> Sound Clash Audio: <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h1>

<section class="byline"> 
    <span> Date <?php the_time('jS F Y') ?></span>
    <span> at <?php the_time('g:i a'); ?>
    </span><span>Written by <?php the_author() ?><span>
</section>          

</header>

 <figure class="thumb"><?php the_post_thumbnail(); ?></figure> 
 
<section class="newsExcerpt"><?php the_content();?></section>

 <br/>
 <footer class="speaker-meta">
<span>Clashed at: <?php echo get_post_meta($post->ID,'sound_clash__business', true); ?></span>
<span>Visit <a href="<?php echo get_post_meta($post->ID,'sound_clash_website_url', true); ?>">
<?php echo get_post_meta($post->ID, 'sound_clash_website_name', true); ?></a></span>
<span>Comes from: <?php echo get_post_meta($post->ID,'sound_clash_location', true); ?></span>
</footer>


</article>
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

</section><!-- end of clashvibes_right_panel_fullwidth -->

</div><!-- end of right panel -->

<?php get_footer(); ?>