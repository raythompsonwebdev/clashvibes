<?php get_header(); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<?php get_sidebar('audio'); ?>

<?php
    $original_query = $wp_query;
    $wp_query = null;
    $args = array(
        
    'category' => 'audio-category',
    'post_type' => 'clash_audio',
    'post_count' => '3'    
   
    
    );
    $wp_query = new WP_Query($args);
?>

<div id="clashvibes_content">

<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

<h1 class="archive-title">Audio Category: <?php single_cat_title(); ?></h1>

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
    <span> Clash Location: <?php echo esc_html( get_post_meta( get_the_ID(), 'movie_director', true ) ); ?> </span>
    <span> Clash year :<?php the_terms( $post->ID, 'movie_reviews_movie_genre' ,  ' ' ); ?></span>
                
</div>
</header>


<figure class="thumb"><?php the_post_thumbnail(); ?></figure>

<div class="entry">

<?php the_content(); ?>

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
