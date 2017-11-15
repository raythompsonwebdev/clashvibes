<?php get_header(); 

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<?php get_sidebar('video'); ?>
<div id="clashvibes_content">

<?php
    $original_query = $wp_query;
    $wp_query = null;
    $args = array(
        
    'tax_query' => array(
            array(
                'taxonomy' => 'video-category',
                'field' => 'slug',
                'terms' => '2000s-video'
            )
    ),
    'post_type' => 'clash_videos',
    'post_count' => '3'    
   
    
    );
    $wp_query = new WP_Query($args);
?>

<div id="clashvibes_content">

<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

<h1 class="archive-title">Video Category: <?php single_cat_title(); ?></h1>

<div id="news_section">
  <?php if ( $wp_query->have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
