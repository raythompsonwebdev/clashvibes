

<?php the_content(); ?>
	


<audio id="result_player" >
<?php 

global $post;

$meta = get_post_meta($post->ID, 'clash-url', true);

//$meta = get_post_meta(get_the_ID(), 'clash-url', true);


?>
    
<source src="./audio/<?php echo $meta; ?>.mp3" type='audio/mp3' type='audio/mpeg' />

<source src="./audio/<?php print_r($meta); ?>.ogg" type='audio/ogg' />
<source src="./audio/<?php echo $meta; ?>.m4a" type='audio/mp4' />
	

<p>Your browser does not support HTML5 audio.</p>
</audio>
  
<br/>
<div id="audio_controls">
    
	    <button id="play_toggle" class="player-button"><i class="fa fa-play-circle" aria-hidden="true"></i></button>
            
                <div id="progress">
                  <span id="load_progress"></span>
                  <span id="play_progress"></span>
                </div>
            
                    <div id="time">
                      <span id="current_time">00:00</span>  
                      <span id="duration">00:00</span>
                    </div>
 </div>

<div class="clearfix"></div>