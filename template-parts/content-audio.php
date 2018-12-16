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

	if ( 'clash_audio' === get_post_type() ) :
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

<?php echo do_shortcode('[customplayer]');?>


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

</article>
		<?php
endwhile;

else :
	?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
