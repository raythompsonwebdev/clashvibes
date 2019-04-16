<?php
/*
Plugin Name: Clashvibes-shorties!
Description: HTML Code.
Author: Raymond Thompson
Version: 1.0
Author URI: http://www.raythompsonwebdev.co.uk
*/

/**
 * Hero Slider Shortcode
 *
 * @param [type] $atts
 * @param [type] $content
 * @return void
 * Here you can see when post title is clicked a JavaScript 
 * function post_popup is called up. This functions retrieve the post 
 * content and displays as popup.
 * I place the shortcode [hero][/hero] in by Blog Posts page. 
 * This is how it looks in frontend
 */


// Date in the past

function customplayer_callback($atts=null, $content=null)
{
    ob_start();
    ?>
    <div class="audioExcerpt">

<!--audio player and audio controls-->
<audio id="result_player" >
        <?php

        global $post;

        $meta = get_post_meta( $post->ID, 'sound_system_url', true );

        ?>
<?php $urlmp = site_url('/wp-content/uploads/sites/2/2018/07/','https');?>  
<source src="<?php echo esc_url( $urlmp ); ?><?php echo esc_html( $meta ); ?>.mp3" type='audio/mpeg'  />


<?php $urlogg = site_url( '/wp-content/uploads/sites/2/2018/07/', 'https' );?>
<source src="<?php echo esc_url( $urlogg ); ?><?php echo esc_html( $meta ); ?>.ogg" type='audio/ogg' />

<?php $urlma = site_url( '/wp-content/uploads/sites/2/2018/07/', 'https' );?>
<source src="<?php echo esc_url( $urlma );?><?php echo esc_html( $meta ); ?>.m4a" type='audio/mp4' />


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
    
    <?php
    return ob_get_clean();
}
add_shortcode("customplayer", "customplayer_callback");

?>