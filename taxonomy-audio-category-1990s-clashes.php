<?php get_header(); ?>
<?php get_sidebar('audio'); ?>
<div id="clashvibes_content">

<?php
    $original_query = $wp_query;
    $wp_query = null;
    $args = array(
    'post_type' => 'clash_audio',
    'post_count' => '5' ,   
    'tax_query' => array(
            array(
                'taxonomy' => 'audio-category',
                'field' => 'slug',
                'terms' => '1990s-clashes'
            )
    )
    
    );
    $wp_query = new WP_Query($args);
?>

<div id="clashvibes_content">

<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

<h1 class="archive-title">Category:<?php single_cat_title(); ?></h1>

<div id="news_section">
  <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

<div class="news_box">
  <header class="archive-header">

<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="archive-meta">
  <!-- Display Title and Author Name -->
    <span>Uploaded by :<?php the_author() ?></span>
   <span> Date: <?php the_time('jS F Y') ?></span>
    <span> at :<?php the_time('g:i a'); ?></span> 
                
</div>
</header>


<figure class="thumb"><?php the_post_thumbnail(); ?></figure>

<div class="entry">

<?php the_excerpt(); ?>

</div>
<br/>
<footer class="postmetadata"><?php
 comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></footer>

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
