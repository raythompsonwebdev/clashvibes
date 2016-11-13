

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">
 	 	
<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">
<?php// Check if there are any posts to display
		if ( have_posts() ) : ?>

<div id="news_section">
<h1>Categories-Old-Video</h1>
            
<div class="news_box">

<ul>
<?php
// Display optional category description
 if ( category_description() ) : ?>

<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>


<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

<div class="entry">
<?php the_content(); ?>

 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>

<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

<!--end of Comment box-->
</div>

</div><!-- end of news -->

</section>
</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
