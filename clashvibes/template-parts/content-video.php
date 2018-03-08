


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

<?php

if ( is_singular() ) :
the_title( '<h1 class="entry-title"><span> Sound Clash Video:</span> <a href="' . esc_url( get_permalink() ) . '"></a>', '</h1>' );
else :
the_title( '<h2 class="entry-title"><span> Sound Clash Video:</span><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
endif;

if ( 'clash_videos' === get_post_type() ) : ?>
<div class="entry-meta">
<?php
clashvibes_posted_on();
clashvibes_posted_by();
?>
</div><!-- .entry-meta -->
<?php
endif; ?>     

</header>

<figure class="thumb"><?php the_post_thumbnail('featured-image'); ?></figure> 

<div class="videoExcerpt">

	<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clashvibes' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clashvibes' ),
			'after'  => '</div>',
		) );
	?>
	
	<!--you tube api -->


	<div class="clearfix"></div>


</div>

<br/>

<footer class="speaker-meta">
<?php the_meta(); ?>
</footer>


</article>
<?php endwhile;
else:
?>
<?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

