<?php

/**
 * *PHP version 7
 *
 * Template Name: Events
 *
 * Events page | core/page-events.php.
 *
 * @category   Events_Page
 * @package    Clashvibes
 * @subpackage Events_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<h2><?php the_title(); ?> Page</h2>

<div class="events-lists">

	<?php
	$clashvibes_the_query = null;

	$clashvibes_args      = array(

		'post_type'  => 'event',
		'post_count' => '1',
	);
	$clashvibes_the_query = new WP_Query( $clashvibes_args );

	if ( $clashvibes_the_query->have_posts() ) :
		while ( $clashvibes_the_query->have_posts() ) :
			$clashvibes_the_query->the_post();
			?>
			<article class="events-item">

				<figure class="events">
					<a href="<?php echo esc_url( get_permalink() ); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">
						<?php the_post_thumbnail( 'event-image' ); ?>
					</a>
					<figcaption class="event-text">
						<h4> <?php the_title(); ?></h4>

					</figcaption>

				</figure>

				<a href="<?php echo esc_url( get_permalink() ); ?>" id="event-submit-btn">See details</a>

			</article>

			<?php
		endwhile;

	else :
		?>

		<article class="events_box">

			<figure class="events">

				<figcaption class="event-text">
					<h4>No Events</h4>

				</figcaption>

			</figure>

		</article>


		<?php
	endif;
	wp_reset_postdata();
	?>








</div>

<?php get_footer(); ?>
