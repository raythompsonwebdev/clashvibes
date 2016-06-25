
<?php
/*
* Template Name: Archives-Sound-Clash 
*/
?>


<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">
 	
 	
<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="news_section">
<h1>Archives1</h1>
            
<div class="news_box">
 <h2>Archives by Month:</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
<h2>Archives by Subject:</h2>
<ul>
<?php wp_list_categories('hierarchical=0&title_li='); ?>
</ul>
                 
		
<?php endwhile; else: ?>
<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
		
<div class="navi"><div class="right">
<?php previous_posts_link('Previous'); ?> / <?php next_posts_link('Next'); ?>
</div>
</div>
    
</div>

</div><!-- end of news -->

</section>
</section><!-- end of right panel -->

<?php get_footer(); ?>


 
</div> 