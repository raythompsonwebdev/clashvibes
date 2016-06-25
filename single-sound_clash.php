  <?php get_header(); ?>
	  
<?php get_sidebar(); ?>
	<div id="clashvibes_content">
 	
<section id="clashvibes_right_column">
      
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

<h1 class="entry-title">Sound Clash Profile: <span><?php the_title(); ?></span></h1>

<p class="speaker-meta">
<span>Clashed at: <?php echo get_post_meta($post->ID,'sound_clash__business', true); ?></span>
<span>Visit <a href="<?php echo get_post_meta($post->ID,'sound_clash_website_url', true); ?>">
<?php echo get_post_meta($post->ID, 'sound_clash_website_name', true); ?></a></span>
<span>Comes from: <?php echo get_post_meta($post->ID,'sound_clash_location', true); ?></span>
</p>

</header>

<div class="entry-content">
<article class="thumb"><?php the_post_thumbnail(); ?></article>
<?php the_content(); ?>
</div><!-- .entry-content -->


</article>
<?php endwhile; ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>

        


     

</section><!-- end of clashvibes_right_panel_fullwidth -->
	

</section><!-- end of right panel -->
<?php get_footer(); ?>


