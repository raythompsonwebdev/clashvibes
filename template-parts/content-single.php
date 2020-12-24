<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */

?>

  <?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
			<div class="entry-meta">
					<?php
					clashvibes_posted_on();
					clashvibes_posted_by();
					?>
			</div><!-- .entry-meta -->
					<?php
				endif;
				?>
		</header><!-- .entry-header -->

		<!--featured Image-->
			<?php if ( has_post_thumbnail() ) : ?>

							<?php clashvibes_post_thumbnail(); ?>

				<?php else : ?>

				  <figure class="featuredImage">

					<a href="#" aria-hidden="true">

					  <img src="<?php echo esc_url( home_url( '/' ) . 'wp-content/uploads/sites/2/2020/12/nothing.jpg' ); ?>" alt="<?php esc_attr_e( 'No image Available', 'clashvibes' ); ?>" rel="prefetch" />

					</a>
				  </figure><!-- featured-image -->

							<?php endif; ?>


		<!--featured Image end-->

		<div class="entry-content">
			<?php
				the_content();

			?>
		</div><!-- .entry-content -->
		<br/>
		<br/>
			<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php clashvibes_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
</article>

<?php endwhile; ?>

	<div class="navigation">
		<h2><?php esc_html_e( 'Navigation', 'clashvibes' ); ?></h2>
			<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'raythompsonwebdev-com' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'raythompsonwebdev-com' ) . '</span> <span class="nav-title">%title</span>',
						)
					);
				?>
	</div>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
