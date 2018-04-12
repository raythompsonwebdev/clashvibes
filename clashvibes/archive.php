
<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">

<!--Post loop start -->
<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>

<section id="clashvibes_right_column">
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				clashvibes_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<figure class="thumb">
	<?php clashvibes_post_thumbnail(); ?>
	</figure>
	<div class="entry-content">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>
<?php else: ?>

    <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>

</section><!-- end of right panel -->
</div>
<?php get_footer(); ?>
