<?php get_header(); ?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">

  <h1>Sound Clash Audio Archives</h1>

<section id="new_released_section">


<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
    
    'post_type' => 'clash_audio',
    'post_count' => '10'
);
$wp_query = new WP_Query($args);
?>

<?php if ( $wp_query->have_posts() ) :  while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<article class="new_released_box">

<h1><?php the_title() ?></h1>

		<figure class="thumb">
		<?php the_post_thumbnail(); ?>

		<figcaption>
<!--			<span class="rantsection">

				<img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
				<img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
				<img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
				<img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
				<img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/whitestar.gif" alt="star" />

			</span>-->

			<span class="more_button"><a class="download_button" href="<?php the_permalink() ?>">Listen</a></span>


		</figcaption>

		</figure>


</article>



<?php endwhile; else: ?>
    
<p>Oops! There are no posts to display.</p>

    <?php endif; wp_reset_query(); ?>

<div class="clearfix"></div>
</section><!-- end of right panel -->


</div>



    <?php get_footer(); ?>
