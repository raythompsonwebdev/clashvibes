<?php
/**
 * *PHP version 7
 *
 * Front page | core/front-page.php.
 *
 * @category   Front_Page
 * @package    Clashvibes
 * @subpackage Front_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 */

get_header(); ?>

	<!--Banner section-->
		<section id="clashvibes-banner">
			<!--2/2018/07-->
			<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/clashvibes/images/sliderimage.webp" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">

		</section>

		<!--new releases section-->
		<section id="new_releases_section">

			<h1><?php esc_html_e( 'Latest Sound Clashes ', 'clashvibes' ); ?></h1>

			<?php

				$clashvibes_the_query = null;

				$clashvibes_args      = array(
					'tax_query'  => array(
						'relation' => 'OR',
						array(
							'taxonomy' => 'audio-category',
							'field'    => 'slug',
							'terms'    => 'new-releases',
						),
						array(
							'taxonomy' => 'video-category',
							'field'    => 'slug',
							'terms'    => 'new-releases',
						),
					),
					'post_type'  => array( 'clash-audio', 'clash-videos' ),
					'post_count' => '5',
				);
				$clashvibes_the_query = new WP_Query( $clashvibes_args );
				?>

			<?php
			if ( $clashvibes_the_query->have_posts() ) :
				while ( $clashvibes_the_query->have_posts() ) :
					$clashvibes_the_query->the_post();
					?>

				<figure class="new_releases_box">

					<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'new-release-thumb' ) ); ?>

					<figcaption>
						<h1>
							<?php the_title(); ?>
						</h1>

						<?php if ( 'clash-audio' === get_post_type() ) : ?>
						<a class="Morebutton" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="Listen to <?php the_title_attribute(); ?>">
							<?php esc_html_e( 'Listen', 'clashvibes' ); ?></a>

						<?php else : ?>

						<a class="Morebutton" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="View <?php the_title_attribute(); ?> Video">
							<?php esc_html_e( 'View', 'clashvibes' ); ?></a>
						<?php endif; ?>

					</figcaption>

				</figure>

					<?php
				endwhile;
				else :
					?>

		<article class="new_releases_box">

		 <figure class="new-release-thumb">


				<figcaption>

					<p><?php esc_html_e( 'Sorry! No clashes to display.', 'clashvibes' ); ?></p>

				</figcaption>

		 </figure>

		</article>

					<?php
				endif;
				wp_reset_postdata();
				?>

		</section>

		<!--Top 10 download section-->
		<div id="popularclashes-section">

			<!--Top 10 Audio Section-->
			<section id="popularclashes-audio">

				<h1><?php esc_html_e( 'Top Audio Clashes ', 'clashvibes' ); ?></h1>
				<?php

					$clashvibes_the_query = null;
					$clashvibes_args      = array(
						'tax_query'  => array(

							array(
								'taxonomy' => 'audio-category',
								'field'    => 'slug',
								'terms'    => 'top-audio',
							),
						),
						'post_type'  => 'clash-audio',
						'post_count' => '5',
					);
					$clashvibes_the_query = new WP_Query( $clashvibes_args );
					?>
				<?php
				if ( $clashvibes_the_query->have_posts() ) :
					while ( $clashvibes_the_query->have_posts() ) :
						$clashvibes_the_query->the_post();
						?>

				<span class="popularclashes-box">

					<span class="popularclashes-image">
						<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'popular-image' ); ?>
						</a>
					</span>

					<span class="popularclashes-title">
						<?php the_title(); ?>
					</span>

					<a class="popularclashes-link" href="<?php echo esc_url( get_permalink(), 'clashvibes' ); ?>" title="Listen to <?php the_title_attribute(); ?>">
						<?php esc_html_e( 'Listen', 'clashvibes' ); ?>
					</a>

				</span>

						<?php
					endwhile;
					else :
						?>

				<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>

						<?php
					endif;
					wp_reset_postdata();
					?>

			</section>

			<!--Top 10 Video Section-->
			<section id="popularclashes-video">

				<h1><?php esc_html_e( 'Top Video Clashes', 'clashvibes' ); ?></h1>

				<?php

					$clashvibes_the_query     = null;
					$clashvibes_args          = array(
						'tax_query'   => array(

							array(
								'taxonomy' => 'video-category',
								'field'    => 'slug',
								'terms'    => 'top-video',
							),
						),
						'post_type'   => 'clash-videos',
						'post_status' => 'publish',
						'post_count'  => '5',
					);
						$clashvibes_the_query = new WP_Query( $clashvibes_args );
					?>

				<?php
				if ( $clashvibes_the_query->have_posts() ) :
					while ( $clashvibes_the_query->have_posts() ) :
						$clashvibes_the_query->the_post();
						?>

				<span class="popularclashes-box">

					<span class="popularclashes-image">
						<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'popular-image' ); ?>
						</a>
					</span>

					<span class="popularclashes-title"><?php the_title(); ?></span>

					<a class="popularclashes-link" href="<?php echo esc_url( get_permalink() ); ?>" title="View <?php the_title_attribute(); ?> Video">
						<?php esc_html_e( 'View', 'clashvibes' ); ?>
					</a>

				</span>

				<?php endwhile; else : ?>

				<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>

					<?php
					endif;
					wp_reset_postdata();
				?>

			</section>

		</div>

		<div class="clearfix"></div>




<?php get_footer(); ?>
