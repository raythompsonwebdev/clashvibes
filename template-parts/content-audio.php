<?php

/**
 * Template part for displaying audio player .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 */

?>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<?php

				if (is_singular()) :
					the_title('<h2 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url(get_permalink()) . '"></a>', '</h2>');
				else :
					the_title('<h2 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('clash-audio' === get_post_type()) :
				?>

					<div class="entry-meta">
						<?php
						clashvibes_posted_on()
						?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header>

			<?php clashvibes_post_thumbnail(); ?>

			<?php the_content(); ?>

			<br />

			<footer class="speaker-meta">

				<ul class="post-meta">
					<li>
						<span class="post-meta-key">
							<?php $clashvibes_sound_name = get_post_meta(get_the_ID(), 'sound_system_name', true); ?>
							<?php esc_html_e('Sound System Name', 'clashvibes'); ?>
						</span>
						<p><?php printf('%s', esc_html($clashvibes_sound_name), 'clashvibes'); ?> </p>
					</li>
					<li>
						<span class="post-meta-key">
							<?php $clashvibes_sound_year = get_post_meta(get_the_ID(), 'sound_clash_year', true); ?>
							<?php esc_html_e('Sound Clash Year', 'clashvibes'); ?>
						</span>
						<p><?php printf('%s', esc_html($clashvibes_sound_year), 'clashvibes'); ?> </p>
					</li>
					<li>
						<span class="post-meta-key">
							<?php $clashvibes_clash_location = get_post_meta(get_the_ID(), 'sound_clash_location', true); ?>
							<?php esc_html_e('Sound Clash Location', 'clashvibes'); ?>
						</span>
						<p><?php printf('%s', esc_html($clashvibes_clash_location), 'clashvibes'); ?> </p>
					</li>
				</ul>

			</footer>


			<div class="navigation">
				<?php
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'clashvibes') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'clashvibes') . '</span> <span class="nav-title">%title</span>',
					)
				);
				?>

			</div>

		</article>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;
		?>
	<?php
	endwhile;

else :
	?>

	<?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>
