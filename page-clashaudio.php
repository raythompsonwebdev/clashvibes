<?php

/**
 * *PHP version 7
 *
 * Template Name: clashaudio
 *
 * Archive Clash Audio | core/page-clashaudio.php.
 *
 * @category   Clash_Audio
 * @package    Clashvibes
 * @subpackage Clash_Audio
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk
 */

get_header(); ?>


<?php
esc_html(the_title('<h2 class="page-title">', '</h2>'));

?>

<section id="audio-releases-section">


	<?php


	$clashvibes_the_query = null;

	$clashvibes_args      = array(

		'post_type'  => 'clash-audio',
		'post_count' => '5',
	);
	$clashvibes_the_query = new WP_Query($clashvibes_args);
	?>

	<?php
	if ($clashvibes_the_query->have_posts()) :
		while ($clashvibes_the_query->have_posts()) :
			$clashvibes_the_query->the_post();
	?>

			<figure class="audio-releases-item">

				<?php the_post_thumbnail('thumbnail', array('class' => 'audio-thumb')); ?>

				<figcaption class="audio-releases-caption">
					<h3 class="audio-releases-header">
						<?php the_title(); ?>
					</h3>
					<a class="audio-releases-btn" href="<?php echo esc_url(get_permalink()); ?>" alt="">
						<?php esc_html_e('Listen', 'clashvibes'); ?></a>


				</figcaption>

			</figure>

		<?php
		endwhile;
	else :
		?>
		<article class="new_released_box">
			<figure class="audio-thumb">
				<figcaption>

					<p>
						<?php esc_html_e('Sorry! No Audio clashes to display.', 'clashvibes'); ?>
					</p>

				</figcaption>

			</figure>

		</article>

	<?php
	endif;
	?>
	<?php wp_reset_postdata(); ?>

	<div class="clearfix"></div>
</section>

<div class="clearfix"></div>

<!-- end of right panel -->


<?php get_footer(); ?>
