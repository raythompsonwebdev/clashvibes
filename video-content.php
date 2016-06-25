
<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
'category_name'=> 'Video-clashes',
'post_type' => 'post'
,'post_count' => '10'
);
$wp_query = new WP_Query($args);
?>
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

<section class="new_released_box">
<h3><?php the_title() ?></h3>	
<article class="thumb"><?php the_post_thumbnail(); ?></article>

<div class="rantsection">
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
        <img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" />  
        <img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
        <img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
        <img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/whitestar.gif" alt="star" /> 
</div>

<section class="more_button"><?php the_excerpt(); ?></section>
</section>

<?php endwhile; else: ?>
<p>Oops! There are no posts to display.</p>
<?php endif;  ?>

<?php
// Reset post data
wp_reset_postdata();
// Restore some order
$wp_query = $original_query;
?>