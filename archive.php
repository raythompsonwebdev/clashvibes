<?php
/*
Template Name: Archives
*/
 get_header(); ?>

<?php get_sidebar(); ?>

<section id="clashvibes_right_column">
	<!--Post loop start -->
	<?php if ( have_posts()) : 

		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		
	?>

		<?php while ( have_posts() ) : the_post();	
					
			get_template_part( 'template-parts/content', get_post_type() );

		?>
		<!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>

	<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</section><!-- end of right panel -->


<?php get_footer(); ?>
