<?php
/**
 * Template part for displaying audio player .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clashvibes
 * 
 */
?>

<?php if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

			<?php

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url( get_permalink() ) . '"></a>', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	if ( 'clash-audio' === get_post_type() ) :
		?>
<div class="entry-meta">
		<?php
		clashvibes_posted_on();
		clashvibes_posted_by();
		?>
</div><!-- .entry-meta -->
<?php endif; ?>
		 
</header>
		
<?php clashvibes_post_thumbnail();  ?>

<div class="audioExcerpt">

	<!--audio player and audio controls-->
	
	<?php

		global $post;

		$meta = get_post_meta( $post->ID, 'sound_system_url', true );

		$urlmp3 = get_site_url();
	
	?> 


	<audio id="result_player" >

	<!--/wp-content/uploads/sites/7/2019/03/-->
				
		<source src="<?php echo esc_url( $urlmp3);?>/wp-content/uploads/sites/2/2019/04/<?php echo esc_html( $meta );?>.mp3" type='audio/mpeg'  />

		<?php $urlogg = get_site_url();?>

		<source src="<?php echo esc_url( $urlogg );?>/wp-content/uploads/sites/2/2019/04/<?php echo esc_html( $meta );?>.ogg" type='audio/ogg' />

		<?php $urlma = get_site_url();?>

		<source src="<?php echo esc_url( $urlma );?>/wp-content/uploads/sites/2/2019/04/<?php echo esc_html( $meta );?>.m4a" type='audio/mp4' />

		<p><?php esc_html_e( 'Your browser does not support HTML5 audio.', 'clashvibes' ); ?></p>

	</audio>
	
	<br/>

	<div id="audio_controls">

		<div id="btns_box">
		<button id="play_toggle" class="player-button"><i class="fa fa-play" aria-hidden="true" title="Play"></i></button>
		<button id="rewind" class="player-button"><i class="fa fa-backward" aria-hidden="true" title="Backward"></i></button>
		<button id="forward" class="player-button"><i class="fa fa-forward" aria-hidden="true" title="Forward"></i></button>
		</div>

		<div id="progress">
		<span id="load_progress"></span>
		<span id="play_progress"></span>
		</div>

		<div id="time">
			<span>Current Time</span><span id="current_time">00:00</span>  
			<span>Duration</span> <span id="duration">00:00</span>
		</div>

		<div id="video_volume">
		<label id="volume_bar" for="volume"><?php esc_html_e( 'Volume', 'clashvibes' ); ?></label>
		<input type="range" id="volume" title="volume" min="0" max="1" step="0.1" value="1">
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
		<li>
			<span class="post-meta-key">
			<?php $SoundUrl = get_post_meta( get_the_ID(),'sound_system_url', true); ?>
			<?php esc_html_e( 'URL', 'clashvibes' ); ?>
			</span>
			<p><?php echo esc_html($SoundUrl); ?>  </p>
		</li>
	</ul>

</footer>
<div class="navigation"><span><?php previous_post_link(); ?></span><span><?php next_post_link(); ?></span></div>
</article>
		<?php
endwhile;

else :
	?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>