<?php get_header(); ?>
	  
<?php get_sidebar(); ?>

<div id="clashvibes_content">
 	
<section id="clashvibes_right_column">
      
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
    audio
<h1 class="entry-title">Sound Clash Profile: <span><?php the_title(); ?></span></h1>

<span class="byline"> Date <?php the_time('jS F Y') ?> at <?php the_time('g:i a'); ?><br />
Written by <?php the_author() ?></span>

</header>

 <figure class="thumb"><?php the_post_thumbnail(); ?></figure> 
 
<section class="newsExcerpt"><?php the_content();?></section>
 
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