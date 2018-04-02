<<<<<<< HEAD


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

<figure class="thumb">

    <?php the_post_thumbnail('featured-image'); ?>
    
    <figcaption>

        <span class="more_button"><a href="<?php the_permalink() ?>">Listen</a></span>


    </figcaption>

</figure> 

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

<source src="<?php get_template_directory_uri() ;?>/wp-content/themes/clashvibes/clashvibes/audio/<?php print_r($meta); ?>.mp3" type='audio/mp3' type='audio/mpeg' />

<source src="<?php get_template_directory_uri() ;?>/wp-content/uploads/sites/audio/<?php print_r($meta); ?>.ogg" type='audio/ogg' />
<source src="<?php get_template_directory_uri() ;?>/wp-content/uploads/sites/audio/<?php print_r($meta); ?>.m4a" type='audio/mp4' />


<p>Your browser does not support HTML5 audio.</p>
</audio>
<br/>
<div id="audio_controls">

<button id="play_toggle" class="player-button">PLAY</i></button>

<div id="progress">
<span id="load_progress"></span>
<span id="play_progress"></span>
</div>

<div id="time">
<span id="current_time">00:00</span>  
<span id="duration">00:00</span>
</div>
<div class="clearfix"></div>
<label id="volume_bar" for="volume">Volume</label>
<input type="range" id="volume" title="volume"min="0" max="1" step="0.1" value="1">
<div id="video_seek">
<label for="seek">Seek</label>
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

=======


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

<figure class="thumb">

    <?php the_post_thumbnail('featured-image'); ?>
    
    <figcaption>

        <span class="more_button"><a href="<?php the_permalink() ?>">Listen</a></span>


    </figcaption>

</figure> 

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

<source src="<?php get_template_directory() ;?>/wp-content/uploads/sites/2/2018/audio/<?php print_r($meta); ?>.mp3" type='audio/mp3' type='audio/mpeg' />

<source src="<?php get_template_directory() ;?>/wp-content/uploads/sites/2/2018/audio/<?php print_r($meta); ?>.ogg" type='audio/ogg' />
<source src="<?php get_template_directory() ;?>/wp-content/uploads/sites/2/2018/audio/<?php print_r($meta); ?>.m4a" type='audio/mp4' />


<p>Your browser does not support HTML5 audio.</p>
</audio>
<br/>
<div id="audio_controls">

<button id="play_toggle" class="player-button">PLAY</i></button>

<div id="progress">
<span id="load_progress"></span>
<span id="play_progress"></span>
</div>

<div id="time">
<span id="current_time">00:00</span>  
<span id="duration">00:00</span>
</div>
<div class="clearfix"></div>
<label id="volume_bar" for="volume">Volume</label>
<input type="range" id="volume" title="volume"min="0" max="1" step="0.1" value="1">
<div id="video_seek">
<label for="seek">Seek</label>
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

>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
