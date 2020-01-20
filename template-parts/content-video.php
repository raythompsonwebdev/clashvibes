<?php
/**
 * Template part for displaying video player .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 */
?>


<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title"><span> Sound Clash Video:</span> <a href="'. esc_url( get_permalink() ) . '"></a>', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><span> Sound Clash Video:</span><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'clash-videos' === get_post_type() ) :
		?>

		<div class="entry-meta">
			<?php
			clashvibes_posted_on();
			clashvibes_posted_by();
			?>
		</div><!-- .entry-meta -->

		<?php endif;?>


	</header>

		<div class="videoExcerpt">

			<!--audio player and audio controls-->

			<?php the_content();?>

			<!--audio player and audio controls-->

			<?php

				global $post;

				$meta = get_post_meta( $post->ID, 'sound_system_url', true );



			?>

			<video id="video_player" >

   
				<?php  $urlmp4 = get_site_url(); ?>

				<source src="<?php echo esc_url( $urlmp4);?>/wp-content/uploads/sites/2/2019/08/<?php echo esc_html( $meta );?>.mp4" preload="metadata" type='video/mp4'  />


				<?php  $urlmp3 = get_site_url(); ?>

				<source src="<?php echo esc_url( $urlmp3);?>/wp-content/uploads/sites/2/2019/08/<?php echo esc_html( $meta );?>.m4v" preload="metadata" type='video/m4v'  />

				<?php $urlogg = get_site_url();?>

				<source src="<?php echo esc_url( $urlogg );?>/wp-content/uploads/sites/2/2019/08/<?php echo esc_html( $meta );?>.webm" preload="metadata" type='video/webm' />

				<p><?php esc_html_e( 'Your browser does not support HTML5 video.', 'clashvibes' ); ?></p>

			</video>

			<br/>

			<div id="videocontrols">

				<div id="btns_box">
				<button id="play_toggle" class="player-button"><i class="fa fa-play" aria-hidden="true" title="Play"></i></button>
				<button id="rewind" class="player-button"><i class="fa fa-backward" aria-hidden="true" title="Backward"></i></button>
				<button id="forward" class="player-button"><i class="fa fa-forward" aria-hidden="true" title="Forward"></i></button>
				</div>

				<div id="progress">
				<progress value="0" id="playback"></progress>
				<span id="load_progress"></span>
				<span id="play_progress"></span>
				</div>

				<div id="time">
					<span><?php esc_html_e( 'Current Time', 'clashvibes' ); ?></span><span id="current_time">00:00</span>
					<span><?php esc_html_e( 'Duration', 'clashvibes' ); ?></span> <span id="duration_time">00:00</span>
				</div>

				<div id="video_volume">
				<label id="volume_bar" for="volume"><?php esc_html_e( 'Volume', 'clashvibes' ); ?></label>
				<input type="range" id="volume" title="volume" min="0" max="1" step="0.1" value="1">
				</div>

				<div id="video_seek">
					<label for="seek"><?php esc_html_e( 'Seek', 'clashvibes' ); ?></label>
					<input type="range" id="seek" title="seek" min="0" value="0" max="0">
				</div>


			</div>


			<div class="clearfix"></div>


		</div>

		<br/>

		<footer class="speaker-meta">

			<ul class="post-meta">
				<li>

					<span class="post-meta-key">
					<?php $SoundName = get_post_meta( get_the_ID(),'sound_system_name', true); ?>
					<?php esc_html_e( 'Sound System Name', 'clashvibes' ); ?>
					</span>
					<p><?php echo esc_html($SoundName); ?> </p>
				</li>
				<li>
					<span class="post-meta-key">
					<?php $SoundYear = get_post_meta( get_the_ID(),'sound_clash_year', true); ?>
					<?php esc_html_e( 'Sound Clash Year', 'clashvibes' ); ?>
					</span>
					<p><?php echo esc_html($SoundYear); ?>  </p>
				</li>
				<li>
					<span class="post-meta-key">
					<?php $SoundLocation = get_post_meta( get_the_ID(),'sound_clash_location', true); ?>
					<?php esc_html_e( 'Sound Clash Location', 'clashvibes' ); ?>
					</span>
					<p><?php echo esc_html($SoundLocation); ?>  </p>
				</li>

			</ul>

		</footer>
		<div class="navigation">
			<h2><?php esc_html_e( 'Navigation', 'clashvibes' ); ?></h2>
				<?php previous_post_link('<span>%link</span>'); ?>
				<?php next_post_link('<span>%link</span>'); ?>
		</div>


</article>
<?php
endwhile;
else :
	?>
<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
