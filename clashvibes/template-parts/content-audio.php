

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

<figure class="thumb"><?php the_post_thumbnail('featured-image'); ?></figure> 

<div class="audioExcerpt">

<!--content-->
<?php
the_content( sprintf(
wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clashvibes' ),
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

