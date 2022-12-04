<?php

/**
 * *PHP version 7
 *
 * Template Name: clashvideos
 *
 * Archive Clash Audio | core/page-clashvideos.php.
 *
 * @category   Archive_Clash_Videos
 * @package    Clashvibes
 * @subpackage Archive_Clash_Videos
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk
 */

get_header(); ?>

<?php
the_title('<h2 class="page-title">', '</h2>');
?>

<section id="video-releases-section">

	<?php

	$clashvibes_the_query = null;

	$clashvibes_args      = array(

		'post_type'  => 'clash-videos',
		'post_count' => '20',
	);
	$clashvibes_the_query = new WP_Query($clashvibes_args);
	?>

	<?php
	if ($clashvibes_the_query->have_posts()) :
		while ($clashvibes_the_query->have_posts()) :
			$clashvibes_the_query->the_post();
	?>


			<figure class="video-releases-item">
				<?php the_post_thumbnail('thumbnail', array('class' => 'video-thumb')); ?>
				<figcaption class=" video-releases-caption">
					<h1 class="video-releases-header">
						<?php the_title(); ?>
					</h1>

					<a class="video-releases-btn" href="<?php echo esc_url(get_permalink()); ?>">
						<?php esc_html_e('View', 'clashvibes'); ?>
					</a>


				</figcaption>

			</figure>


		<?php endwhile; ?>
	<?php else : ?>

		<article class="video_releases_box">

			<figure class="audio-thumb">

				<figcaption>

					<p><?php esc_html_e('Sorry! No Video clashes to display.', 'clashvibes'); ?></p>

				</figcaption>

			</figure>

		</article>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

	<div class="clearfix"></div>

</section>

<div class="clearfix"></div>

<?php get_footer(); ?>
