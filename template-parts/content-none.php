<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
		<header class="entry-header">
			<h1 class="page-title">
				<?php
				if ( is_404() ) {
					esc_html_e( 'Page not available', 'clashvibes' );
				} elseif ( is_search() ) {
					/* translators: %s = search query */
					printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'clashvibes' ), '<em>' . get_search_query() . '</em>' );
				} else {
					esc_html_e( 'Nothing Found', 'clashvibes' );
				}
				?>
			</h1>
		</header><!-- .page-header -->
   

		<div class="entry-content">

			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<?php /* translators: %1$s = link */ ?>
				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'clashvibes' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'clashvibes' ); ?></p>
				
				<?php get_search_form(); ?>

			<?php elseif ( is_404() ) : ?>

				<p><?php esc_html_e( 'You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'clashvibes' ); ?></p>

				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'clashvibes' ); ?></p>

				<?php get_search_form(); ?>

			<?php endif; ?>
				

		</div><!-- .page-content -->

	
</article>
