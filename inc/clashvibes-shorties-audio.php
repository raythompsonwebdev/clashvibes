<?php
/**
 * Plugin Name: Clashvibes-Audio Player!
 * Description: HTML Code.
 * Author: Raymond Thompson.
 * Version: 1.0.
 * Author URI: http://www.raythompsonwebdev.co.uk.
 *
 * @package Audio player
 */

/**
 * Audio Player Shortcode *
 *
 * @param array  $atts array of values.
 * @param string $src url for audio.
 * @return mixed
 * Here you can see when post title is clicked a JavaScript
 * function post_popup is called up. This functions retrieve the post
 * content and displays as popup.
 * I place the shortcode [hero][/hero] in by Blog Posts page.
 * This is how it looks in frontend
 */
function audioplayer_callback( $atts ) {

	// define shortcode variables.
	extract(
		shortcode_atts(
			array(

				'src' => 'https://clashbucket.s3.eu-west-2.amazonaws.com/clashbucket/',

			),
			$atts
		)
	);

	$args = array( 'src' => $src );

	ob_start();
	?>
  <div class="audioExcerpt">

	<!--Audio sources-->
	<audio id="result_player">

	  <source src="<?php echo esc_url( $src ); ?>.mp3" preload="metadata" type='audio/mpeg' />

	  <source src="<?php echo esc_url( $src ); ?>.ogg" preload="metadata" type='audio/ogg' />

	  <source src="<?php echo esc_url( $src ); ?>.m4a" preload="metadata" type='audio/mp4' />

	  <p><?php esc_html_e( 'Your browser does not support HTML5 audio.', 'clashvibes' ); ?></p>

	</audio>
	<br/>

	<!--Audio controls-->
	<div id="audio_controls">

	  <div id="btns_box">
		<button id="play_toggle" class="player-button">
		  <i class="fa fa-play" aria-hidden="true" title="Play"></i>
		</button>
		<button id="rewind" class="player-button">
		  <i class="fa fa-backward" aria-hidden="true" title="Backward"></i>
		</button>
		<button id="forward" class="player-button">
		  <i class="fa fa-forward" aria-hidden="true" title="Forward"></i>
		</button>
	  </div>

	  <div id="progress">
		<progress value="0" id="playback"></progress>
		<span id="load_progress"></span>
		<span id="play_progress"></span>
	  </div>

	  <div id="time">
		<span><?php esc_html_e( 'Current Time', 'clashvibes' ); ?></span>
		<span id="current_time">00:00</span>
		<span><?php esc_html_e( 'Duration', 'clashvibes' ); ?></span>
		<span id="duration_time">00:00</span>
	  </div>

	  <div id="video_volume">
		<label id="volume_bar" for="volume"><?php esc_html_e( 'Volume', 'clashvibes' ); ?></label>
		<input type="range" id="volume" title="volume" min="0" max="1" step="0.1" value="1">
	  </div>

	  <div id="video_seek">
		<label for="seek"><?php esc_html_e( 'SEEK', 'clashvibes' ); ?></label>
		<input type="range" id="seek" title="seek" min="0" value="0" max="0">
	  </div>

	</div>

  </div>

	<?php
	return ob_get_clean();
}
add_shortcode( 'audioplayer', 'audioplayer_callback' );

?>
