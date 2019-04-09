<?php
/**
 * *PHP version 5
 *
 * Attachment Page | core/attachment.php.
 *
 * @category   Attachment_Page
 * @package    Clashvibes
 * @subpackage Attachment_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

 $metadata = wp_get_attachment_metadata();

 get_header(); ?>


<div id="clashvibes_content">

<?php get_sidebar( 'image' ); ?>

<section id="clashvibes_right_column">

<h1><?php the_title(); ?></h1>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

<article class="post group" <?php post_class(); ?> <?php the_ID(); ?>>

	
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
		
		<div class="entry-meta">
		
									
			<span class="parent-post-link">
			<?php esc_html_e( 'Featured in: ', 'clashvibes' ); ?>
				<a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>" rel="gallery"><?php echo get_the_title( $post->post_parent ); ?>
				</a>
			</span>
			
			<span class="full-size-link">
			<?php esc_html_e( 'Full size image: ', 'clashvibes' ); ?>
				<a href="<?php echo esc_url( wp_get_attachment_url() ); ?>"><?php echo esc_html( $metadata['width'], 'clashvibes' ); ?> &times; <?php echo esc_html( $metadata['height'], 'clashvibes' ); ?>
				</a>
			</span>
			
			<?php edit_post_link( __( 'Edit attachment post', 'clashvibes' ), '<span class="edit-link">', '</span>.' ); ?>

		</div>

	</header><!--end of by line-->

		<?php
		if ( wp_attachment_is_image( $post->id ) ) :
			$att_image = wp_get_attachment_image_src( $post->id, 'full' );
			?>

<figure class="attachment
			<?php
			if ( has_excerpt() ) {
				echo ' alignnone wp-caption '; }
			?>
">
		
			<?php clashvibes_attached_image(); ?>
			<?php if ( has_excerpt() ) : ?>

		<figcaption class="wp-caption-text">
				<?php
				echo esc_html(
					get_the_excerpt(
						sprintf(
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
						)
					)
				);
				?>
		</figcaption><!-- .entry-caption -->


<?php endif; ?>
</figure>

	<div class="entry-attachment">

			<?php	the_content(); ?>

	</div>
		

	<br/>
	<footer class="entry-footer">

			<?php clashvibes_attachment_nav(); ?>

	</footer>


			<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>


	<?php endif; ?>

</article><!--end of post group-->

	<?php endwhile; ?>

<?php endif; ?>

<section class="contact-wide">
	<h1><?php esc_html_e( 'Send Comment ', 'clashvibes' ); ?></h1>
	<div id="clashvibes_comments_form">
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || '0' !== get_comments_number() ) :
		comments_template();
	endif;
	?>
	</div>
</section>

</section>

</div>


<?php get_footer(); ?>