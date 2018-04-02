


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

<?php

if (is_singular() ) :
    the_title('<h1 class="entry-title"><span> Sound Clash Video:</span> <a href="' . esc_url(get_permalink()) . '"></a>', '</h1>');
else :
    the_title('<h2 class="entry-title"><span> Sound Clash Video:</span><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
endif;

if ('clash_videos' === get_post_type() ) : ?>
<div class="entry-meta">
<?php
clashvibes_posted_on();
clashvibes_posted_by();
?>
</div><!-- .entry-meta -->
<?php
endif; 

?>     

</header>

<div class="videoExcerpt">


<?php the_content(); ?>

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

