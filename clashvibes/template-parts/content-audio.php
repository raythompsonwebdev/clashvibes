

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

<?php

if ( is_singular() ) :
the_title( '<h1 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url( get_permalink() ) . '"></a>', '</h1>' );
else :
the_title( '<h2 class="entry-title"><span> Sound Clash Audio:</span> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
endif;

if ( 'clash_audio' === get_post_type() ) : ?>
<div class="entry-meta">
<?php
clashvibes_posted_on();
clashvibes_posted_by();
?>
</div><!-- .entry-meta -->
<?php
endif; ?>     

</header>


<?php clashvibes_post_thumbnail(); ?>
  

<div class="audioExcerpt">

<!--content-->
<?php
the_content( sprintf(
wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading <span class="screen-reader-text"> "%s"</span>', 'clashvibes' ),
    array(
        'span' => array(
            'class' => array(),
        ),
    )
),
get_the_title()
) );

wp_link_pages( array(
'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clashvibes' ),
'after'  => '</div>',
) );
?>

<!--audio player and audio controls-->
<audio id="result_player" >
<?php
global $post;

$meta = get_post_meta($post->ID, 'clash-url', true);

//$meta = get_post_meta(get_the_ID(), 'clash-url', true);
?>

<source src="<?php 
    $urlmp = site_url('/wp-content/uploads/sites/3/2018/04/', 'https');
    echo esc_url($urlmp);?><?php echo esc_html($meta); ?>.mp3" 
    type='audio/mp3'  />

<source src="<?php 
    $urlogg = site_url('/wp-content/uploads/sites/3/2018/04/', 'https');
    echo esc_url($urlogg);?><?php echo esc_html($meta); ?>.ogg" 
    type='audio/ogg' />

<source src="<?php 
    $urlma = site_url('/wp-content/uploads/sites/3/2018/04/', 'https');
    echo esc_url($urlma );?><?php echo esc_html($meta); ?>.m4a" 
    type='audio/mp4' />


<p><?php _e('Your browser does not support HTML5 audio.', 'clashvibes'); ?></p>
</audio>
<br/>
<div id="audio_controls">

<button id="play_toggle" class="player-button"><?php _e('PLAY', 'clashvibes'); ?></i></button>

<div id="progress">
<span id="load_progress"></span>
<span id="play_progress"></span>
</div>

<div id="time">
<span id="current_time">00:00</span>  
<span id="duration">00:00</span>
</div>
<div class="clearfix"></div>
<label id="volume_bar" for="volume"><?php _e('Volume', 'clashvibes'); ?></label>
<input type="range" id="volume" title="volume"min="0" max="1" step="0.1" value="1">
<div id="video_seek">
<label for="seek"><?php _e('Seek', 'clashvibes'); ?></label>
<input type="range" id="seek" title="seek" min="0" value="0" max="0">
</div>


</div>
<div class="clearfix"></div>



</div>

<br/>

<footer class="speaker-meta">
<?php the_meta(); ?>
</footer>


</article>
<?php endwhile;
else:
?>
<?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

