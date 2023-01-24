<?php

/**
 * *PHP version 8.1
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

get_header(); ?>



<h2 class="page-title"><?php single_cat_title('', true) ?></h2>


<div class="events-lists">

	<?php
	$clashvibes_the_query = null;

	$clashvibes_args      = array(
		'post_type'  => 'post',
		'category_name' => 'clash-events',
		'post_count'     => '5',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
	);
	$clashvibes_the_query = new WP_Query($clashvibes_args);

	if ($clashvibes_the_query->have_posts()) :
		while ($clashvibes_the_query->have_posts()) :
			$clashvibes_the_query->the_post();
	?>

			<figure class="events-item">
				<h3 class="events-item-title"> <?php esc_html(the_title()); ?></h3>
				<a href="<?php echo esc_url(get_permalink()); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;" class="attachment-event-image">
					<?php the_post_thumbnail('event-image'); ?>
				</a>
				<figcaption class="events-item-caption">

					<p class="events-item-txt"></p>
					<a href="<?php echo esc_url(get_permalink()); ?>" id="events-link">See details</a>
				</figcaption>

			</figure>

		<?php endwhile; ?>

	<?php else : ?>

		<article class="events_box">
			<figure class="events">
				<figcaption class="event-text">
					<h4><?php echo esc_html__('No Events', 'clashvibes'); ?></h4>
				</figcaption>
			</figure>
		</article>

	<?php
	endif;
	wp_reset_postdata();
	?>








</div>

<?php get_footer(); ?>
