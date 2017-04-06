<?php get_header(); ?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">

  <h1>Sound Clash Audio</h1>

<section id="new_released_section">


<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
'category_name'=> 'audio-clashes',
'post_type' => 'sound_clash_audio',
'post_count' => '5'
);
$wp_query = new WP_Query($args);
?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

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

<section class="more_button">
    
 <a class="download_button" href="<?php the_permalink() ?>">Listen</a>
        
</section>


</section>

<?php endwhile; else: ?>
<p>Oops! There are no posts to display.</p>
<?php endif; wp_reset_query(); ?>

<div class="clearfix"></div>
</section><!-- end of right panel -->


</div>



    <?php get_footer(); ?>
