

  <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>


<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
<header class="archive-header">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="archive-meta">
  <!-- Display Title and Author Name -->
    <span>Uploaded by :<?php the_author() ?></span>
    <span> Date: <?php the_time('jS F Y') ?></span>
    <span> at :<?php the_time('g:i a'); ?></span>
                
</div>
</header>

<figure class="thumb"><?php the_post_thumbnail(); ?></figure>

<div class="newsExcerpt">

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
</article>


