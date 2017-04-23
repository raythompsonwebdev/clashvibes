<?php get_header(); ?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">

  <h1>Sound Clash Video Archives</h1>

<section id="new_released_section">


<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(

'post_type' => 'clash_videos',
'post_count' => '10'
);
$wp_query = new WP_Query($args);
?>

<?php if ( $wp_query->have_posts() ) :  while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

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

<div class="clearfix"></div>
</section><!-- end of right panel -->


</div>

    <?php get_footer(); ?>
