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

 get_header();?>


<?php
	the_title( '<h1 class="page-title">', '</h1>' );
?>

<section id="video_releases_section">

	<?php
	
		$the_query = null;

		$args      = array(

			'post_type'  => 'clash-videos',
			'post_count' => '20',
		);
		$the_query = new WP_Query( $args );
	?>

	<?php
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>

	<article class="video_releases_box">

		<h1>
			<?php the_title(); ?>
		</h1>

		<figure class="video-thumb">
			<?php the_post_thumbnail(); ?>
			<figcaption>

				<a 
					class="Morebutton"
					href="<?php echo esc_url( get_permalink() ); ?>">
					<?php esc_html_e( 'View', 'clashvibes' ); ?>
				</a>


			</figcaption>

		</figure>

	</article>

	<?php	endwhile; else : ?>

	<article class="video_releases_box">

		<figure class="audio-thumb">


			<figcaption>

				<p><?php esc_html_e( 'Sorry! No Video clashes to display.', 'clashvibes' ); ?></p>


			</figcaption>

		</figure>

	</article>
	<?php	endif; ?>

	<?php wp_reset_postdata(); ?>

	<div class="clearfix"></div>

</section>
<!--End of news release section-->

<div class="clearfix"></div>

<!-- end of right panel -->


<?php get_footer(); ?>