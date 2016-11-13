
<<?php

$original_query = $wp_query;
$wp_query = null;
$args = array(
    'category_name'=> 'new-audio-clashes',  
    'post_type' => 'sound_clash_audio',
    'post_count' => '5',
    'posts_per_page' => '5'
    );

$wp_query = new WP_Query($args);

?>

<?php 

if ( $wp_query-> have_posts() ) :  while ( have_posts() ) : $wp_query-> the_post(); 
?>

<section class="new_released_box">
<article class="thumb"><?php the_post_thumbnail(); ?></article>
		
<h3><?php the_title() ?></h3>

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
<?php endif; wp_reset_query(); ?>

