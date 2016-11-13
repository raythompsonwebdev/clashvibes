 <?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">
 	
 	
 	
	<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
'posts_per_page' => 3,
'post_type' => 'post',
'paged' => $paged
);
$wp_query = new WP_Query($args);
?>

<?php if ($wp_query->have_posts()):?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 				
  			
<article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">

<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<section class="byline"> Date <?php the_time('jS F Y') ?> at <?php the_time('g:i a'); ?><br />
Written by <?php the_author() ?></section>

<article class="thumb"><?php the_post_thumbnail(); ?></article>

<section class="newsExcerpt"><?php the_excerpt();?>

</section>

<br/>

<section class="byline">
Posted in category<?php the_category(', ') ?> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
<br/>
<p><?php $lastmodified = get_the_modified_time('U'); $posted = get_the_time('U');
			if ($lastmodified > $posted) {
			echo "Edited " . human_time_diff(get_the_time('U'),	get_the_modified_time('U')) . " later";
			}?>
</p>

	</section>

		</article>

	<?php endwhile; ?>
	<?php else: ?>
		
		<h1>No posts to show</h1>
			<p>Sorry, we got nada. Nothing. Bupkis. Zippo. Diddly-squat. Sorry to disappoint.</p>
				<?php endif; wp_reset_query();?>	

				
<div class="clearfix"></div>
</section><!-- end of clashvibes_right_panel_fullwidth -->
	

</section><!-- end of right panel -->


    <?php get_footer(); ?>