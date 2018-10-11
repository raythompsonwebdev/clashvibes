<?php
/**
 * *PHP version 5
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
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>


<div id="clashvibes_content_front">

	<section id="clashvibes_right_column_front">

		<section id="clashvibes_banner">
			
		<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/sites/3/2018/04/sliderimage.jpg" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">
			
		</section>

		<h1><?php esc_html_e( 'Latest Sound Clashes ', 'clashvibes' ); ?></h1>

			   
<!--Start of news release section-->
		<section id="new_released_section">


			<?php
			$original_query = $wp_query;

			$wp_query = null;

			$args     = array(
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
				'post_type'  => array( 'clash_audio', 'clash_videos' ),
				'post_count' => '5',
			);
			$wp_query = new WP_Query( $args );
			?>

				<?php
				if ( $wp_query->have_posts() ) :
					while ( $wp_query->have_posts() ) :
						$wp_query->the_post();
						?>

				<article class="new_released_box">

					<h1>
						<?php the_title(); ?>
					</h1>

					<figure class="thumbaud">
					   
						<?php the_post_thumbnail(); ?>

						<figcaption>
							
												
						<?php if ( 'clash_audio' === get_post_type() ) : ?>
						   <span class="Morebutton"><a href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="Listen to <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?>"><?php esc_html_e( 'Listen', 'clashvibes' ); ?></a></span>
						   
							<?php else : ?>
						   
						   <span class="Morebutton"><a href=" <?php echo esc_url( get_permalink(), 'clashvibes' ); ?> " title="View <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?> Video"><?php esc_html_e( 'View', 'clashvibes' ); ?></a></span>
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
  
		<p><?php esc_html_e( 'Sorry! No new clashes to display.', 'clashvibes' ); ?></p>


	</figcaption>

</figure>

</article>
				<?php
				endif;
wp_reset_postdata();
?>

	 
		</section>
		<!--End of news release section-->


		<div id="topdownload_section_ctner">
			<!--Top 10 Audio Section-->
			<ul id="topdownload_section">

				<h1><?php esc_html_e( 'Top Audio Clashes ', 'clashvibes' ); ?></h1>
				<?php
					$original_query = $wp_query;
					$wp_query       = null;
					$args           = array(
						'tax_query'  => array(

							array(
								'taxonomy' => 'audio-category',
								'field'    => 'slug',
								'terms'    => 'top-audio',
							),
						),
						'post_type'  => 'clash_audio',
						'post_count' => '5',
					);
					$wp_query       = new WP_Query( $args );
					?>
					<?php
					if ( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) :
							$wp_query->the_post();
							?>
					<li class="topdownload_box">
						<span class="image_thumb"><a href="" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a></span>
						<span class="title_singer"><?php the_title(); ?></span>
						<span><a href="<?php echo esc_url( get_permalink(), 'clashvibes' ); ?>" title="Listen to <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?>"><?php esc_html_e( 'Listen', 'clashvibes' ); ?></a></span>
					</li>

											<?php
					endwhile;
				else :
					?>
					<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>
					<?php
					endif;
				wp_reset_postdata();
				?>



			</ul>
			<div class="clearfix"></div> 
			<!--Top 10 Video Section-->
			<ul id="topdownload_section">

				<h1><?php esc_html_e( 'Top Video Clashes', 'clashvibes' ); ?></h1>
				<?php
					$original_query = $wp_query;
					$wp_query       = null;
					$args           = array(
						'tax_query'  => array(

							array(
								'taxonomy' => 'video-category',
								'field'    => 'slug',
								'terms'    => 'top-video',
							),
						),
						'post_type'  => 'clash_videos',
						'post_count' => '5',
					);
					$wp_query       = new WP_Query( $args );
					?>
					<?php
					if ( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) :
							$wp_query->the_post();
							?>
					<li class="topdownload_box">
					   <span class="image_thumb"><a href="" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a></span>
						<span class="title_singer"><?php the_title(); ?></span>
						<span><a href="<?php echo esc_url( get_permalink() ); ?>" title="View <?php esc_attr( the_title_attribute(), 'clashvibes' ); ?> Video"><?php esc_html_e( 'View', 'clashvibes' ); ?></a></span>
					</li>

											<?php endwhile; else : ?>
					
					<p><?php esc_html_e( 'Oops! There are no posts to display.', 'clashvibes' ); ?></p>
					
					<?php
					endif;
				wp_reset_postdata();
?>



			</ul>
			
		</div>
		<div class="clearfix"></div>
	</section>
	<!-- end of right panel -->

	</div>
	<?php get_footer(); ?>
