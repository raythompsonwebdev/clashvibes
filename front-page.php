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
		<section id="clashvibes_banner">
			<!--2/2018/07-->
			<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/clashvibes/images/sliderimage.jpg" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">

		</section>		

		<!--new releases section-->
		<section id="new_releases_section">

      <h1>
        <?php esc_html_e( 'Latest Sound Clashes ', 'clashvibes' ); ?>
      </h1>

			<?php			

				$the_query = null;

				$args      = array(
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
				$the_query = new WP_Query( $args );
			?>

			<?php
				if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
				$the_query->the_post();
			?>

			<article class="new_releases_box">

				<h1>
					<?php the_title(); ?>
				</h1>

				<figure class="new-release-thumb">

					<?php the_post_thumbnail(); ?>

					<figcaption>

						<?php if ( 'clash-audio' === get_post_type() ) : ?>
						<a class="Morebutton" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="Listen to <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?>">
							<?php esc_html_e( 'Listen', 'clashvibes' ); ?></a>

						<?php else : ?>

						<a class="Morebutton" href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="View <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?> Video">
							<?php esc_html_e( 'View', 'clashvibes' ); ?></a>
						<?php endif; ?>

					</figcaption>

        </figure>
        
        <div class="clearfix"></div>
        
			</article>

				<?php
					endwhile;
					else :
        ?>
        
			<article class="new_released_box">

				<figure class="thumbaud">


					<figcaption>

						<p>
							<?php esc_html_e( 'Sorry! No new clashes to display.', 'clashvibes' ); ?>
						</p>


					</figcaption>

				</figure>

      </article>
      
				<?php
					endif;
					wp_reset_postdata();
				?>


		</section>
		
    <!--Top 10 download section-->
		<div id="topdownload_section_ctner">

			<!--Top 10 Audio Section-->
			<ul id="topdownload_section">

				<h1>
					<?php esc_html_e( 'Top Audio Clashes ', 'clashvibes' ); ?>
				</h1>
				<?php
					$original_query = $the_query;
					$the_query      = null;
					$args           = array(
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
					$the_query      = new WP_Query( $args );
					?>
				<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
				<li class="topdownload_box">
					<span class="image_thumb"><a href="" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?></a></span>
					<span class="title_singer">
						<?php the_title(); ?></span>
					<span><a href="<?php echo esc_url( get_permalink(), 'clashvibes' ); ?>" title="Listen to <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?>">
							<?php esc_html_e( 'Listen', 'clashvibes' ); ?></a></span>
				</li>

						<?php
					endwhile;
				else :
					?>
				<p>
					<?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?>
				</p>
					<?php
					endif;
				wp_reset_postdata();
				?>



			</ul>

			<!--Top 10 Video Section-->
			<ul id="topdownload_section">

				<h1>
					<?php esc_html_e( 'Top Video Clashes', 'clashvibes' ); ?>
				</h1>
				<?php
					$original_query = $the_query;
					$the_query      = null;
					$args           = array(
						'tax_query'  => array(

							array(
								'taxonomy' => 'video-category',
								'field'    => 'slug',
								'terms'    => 'top-video',
							),
						),
						'post_type'  => 'clash-videos',
						'post_count' => '5',
					);
						$the_query  = new WP_Query( $args );
					?>
				<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
				<li class="topdownload_box">
					<span class="image_thumb"><a href="" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?></a></span>
					<span class="title_singer">
						<?php the_title(); ?></span>
					<span><a href="<?php echo esc_url( get_permalink() ); ?>" title="View <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?> Video">
							<?php esc_html_e( 'View', 'clashvibes' ); ?></a></span>
				</li>

				<?php endwhile; else : ?>

				<p>
					<?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?>
				</p>

				<?php
					endif;
					wp_reset_postdata();
				?>



			</ul>

		</div>

		<div class="clearfix"></div>




<?php get_footer(); ?>
