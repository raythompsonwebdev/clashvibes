<?php

/**
 * *PHP version 7
 *
 * Category page | core/category.php.
 *
 * @category   Category_Page
 * @package    Clashvibes
 * @subpackage Category_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<?php get_sidebar(); ?>

<!--<main id="primary" class="site-main">-->
<main id="primary" class="site-main">

	<?php
	/**
	 * Check if there are any posts to display.
	 */
	if (have_posts()) :
	?>

		<h1 class="archive-title">Category: <?php single_cat_title('', true); ?></h1>

		<?php
		/**
		 * Display optional category description.
		 */
		if (category_description()) :
		?>

		<?php endif; ?>

		<?php
		while (have_posts()) :
			the_post();
		?>

			<article class="post group <?php post_class(); ?>" id="post-<?php the_ID(); ?>">


				<header class="entry-header">
					<?php
					if (is_singular()) :
						the_title('<h1 class="entry-title">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

					if ('post' === get_post_type()) :
					?>
						<div class="entry-meta">
							<?php
							clashvibes_posted_on();

							?>
						</div><!-- .entry-meta -->
					<?php
					endif;
					?>
				</header><!-- .entry-header -->

				<!--featured Image-->
				<a href="<?php echo esc_url(get_permalink()); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

					<?php if (has_post_thumbnail()) : ?>

						<?php clashvibes_post_thumbnail(); ?>

					<?php else : ?>

						<a class="post-thumbnail" href="<?php echo esc_url(get_permalink()); ?>" aria-hidden="true">

							<img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/sites/2/2020/12/nothing.jpg" alt="<?php esc_attr_e('No image Available', 'clashvibes'); ?>" rel="prefetch" />

						</a>

					<?php endif; ?>

				</a>
				<!--featured Image end-->

				<div class="entry-content">
					<?php
					the_excerpt();

					?>

				</div><!-- .entry-content -->


				<?php if (get_edit_post_link()) : ?>
					<footer class="entry-footer">
						<?php clashvibes_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>

			</article>

		<?php
		endwhile;
	else :
		?>

		<?php get_template_part('template-part/content', 'none'); ?>

	<?php endif; ?>




</main>


<?php get_footer(); ?>
