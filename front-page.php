<?php

/**
 * *PHP version 8.1
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


<section id="clashvibes-banner">

	<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/clashvibes/images/sliderimage.webp" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">

</section>
<h2><?php esc_html_e( 'Latest Sound Clashes ', 'clashvibes' ); ?></h2>

<section id="new-releases-section">

	<?php

	$clashvibes_the_query = null;

	$clashvibes_args = array(
		'post_type'      => 'post',
		'category_name'  => 'audio-clashes',
		'post_count'     => '5',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
	);

	$new_clashes = get_posts( $clashvibes_args );
	?>

	<?php
	if ( $new_clashes ) :
		foreach ( $new_clashes as $new_clash ) :

			setup_postdata( $new_clash );

			?>
			<figure class="new-releases-item">

				<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'new-release-thumb' ) ); ?>

				<figcaption class="new-releases-caption">
					<h3 class="new-releases-header">
						<?php echo esc_html( the_title() ); ?>
					</h3>

					<?php if ( 'clash-audio' === get_post_type() ) : ?>
						<a class="new-release-btn" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="Listen to <?php the_title_attribute(); ?>">
							<?php esc_html_e( 'Listen', 'clashvibes' ); ?></a>

					<?php else : ?>

						<a class="new-release-btn" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="View <?php the_title_attribute(); ?> Video">
							<?php esc_html_e( 'View', 'clashvibes' ); ?></a>
					<?php endif; ?>

				</figcaption>

			</figure>
			<?php
		endforeach;
		wp_reset_postdata();
		?>
	<?php else : ?>

		<article class="new-releases-item">

			<figure class="new-release-thumb">

				<figcaption class="new-releases-caption">

					<h3 class="new-releases-header"><?php esc_html_e( 'Sorry! No clashes to display.', 'clashvibes' ); ?></h3>

				</figcaption>

			</figure>

		</article>

	<?php endif; ?>



</section>

<div id="top-clashes-section">

	<section id="top-audio-clashes">

		<h4 class="top-clashes-title"><?php esc_html_e( 'Top Audio Clashes ', 'clashvibes' ); ?></h5>
			<?php

			$clashaudio_args = array(
				'post_type'      => 'post',
				'category_name'  => 'audio-clashes',
				'post_count'     => '5',
				'post_status'    => 'publish',
				'posts_per_page' => -1,
			);

			$audio_clashes = get_posts( $clashaudio_args );

			?>
			<?php
			if ( $audio_clashes ) {
				foreach ( $audio_clashes as $audio_clash ) :

					setup_postdata( $audio_clash );
					?>
					<span class="top-clash-item">

						<span class="top-clash-img">
							<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'popular-image' ); ?>
							</a>
						</span>

						<span class="top-clash-name">
							<?php echo esc_html( the_title() ); ?>
						</span>

						<a class="top-clash-link" href="<?php echo esc_url( get_permalink(), 'clashvibes' ); ?>" title="Listen to <?php the_title_attribute(); ?>">
							<?php esc_html_e( 'Listen', 'clashvibes' ); ?>
						</a>

					</span>
					<?php
				endforeach;

				wp_reset_postdata();
			} else {
				?>

				<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>

			<?php	} ?>

	</section>

	<section id="top-video-clashes">

		<h4 class="top-clashes-title"><?php esc_html_e( 'Top Video Clashes', 'clashvibes' ); ?></h4>

		<?php

		$clashvideo_the_query = null;
		$clashvideo_args      = array(
			'post_type'      => 'post',
			'category_name'  => 'top-videos',
			'post_count'     => '5',
			'post_status'    => 'publish',
			'posts_per_page' => -1,

		);
		$clashvideo_the_query = new WP_Query( $clashvideo_args );
		?>

		<?php
		if ( $clashvideo_the_query->have_posts() ) :
			while ( $clashvideo_the_query->have_posts() ) :
				$clashvideo_the_query->the_post();
				?>

				<span class="top-clash-item">

					<span class="top-clash-img">
						<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'popular-image' ); ?>
						</a>
					</span>

					<span class="top-clash-name">
						<?php echo esc_html( the_title() ); ?>
					</span>

					<a class="top-clash-link" href="<?php echo esc_url( get_permalink() ); ?>" title="View <?php the_title_attribute(); ?> Video">
						<?php esc_html_e( 'View', 'clashvibes' ); ?>
					</a>

				</span>

			<?php endwhile; ?>
		<?php else : ?>

			<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>

			<?php
		endif;
		wp_reset_postdata();
		?>

	</section>

</div>

<?php get_footer(); ?>
