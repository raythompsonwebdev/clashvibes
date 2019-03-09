<?php
/**
 * *PHP version 5
 *
 * Archive Clash Videos | core/archive-clash_videos.php.
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

<div id="clashvibes_content_front">


	<section id="clashvibes_right_column_front">


		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );

		?>

		<section id="new_released_section">

			<?php
<<<<<<< HEAD:archive-clash-videos.php


				$original_query = $the_query;

				$the_query = null;

			$args      = array(

=======
		
			$the_query = null;

			$args      = array(

>>>>>>> bc1944fe441a0e0cadfc83377897907ee587aa6c:archive-clash-videos.php
				'post_type'  => 'clash-videos',
				'post_count' => '5',
			);
			$the_query = new WP_Query( $args );
			?>

				<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>

				<article class="new_released_box">

					<h1>
						<?php the_title(); ?>
					</h1>

					<figure class="thumbvid">
						<?php the_post_thumbnail(); ?>
					<figcaption>

							<a class="Morebutton" href="<?php echo esc_url( get_permalink() ); ?>" ><?php esc_html_e( 'View', 'clashvibes' ); ?></a>


						</figcaption>

					</figure>

				</article>

<?php	endwhile; else : ?>

						<article class="new_released_box">

							<figure class="thumb">


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

</section>
</div>


<?php get_footer(); ?>
