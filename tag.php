
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">
  	
<section id="clashvibes_right_column">

<div class="clashvibes_right_panel_fullwidth">
<?php// Check if there are any posts to display
		if ( have_posts() ) : ?>

<div id="news_section">
<h1>Archives-Tags</h1>
            
<div class="news_box">
    
<h2>Archives by Month:</h2>

<header class="archive-header">
    
    <h1 class="archive-title">
        <?php printf( __( 'Tag Archives: %s', 'clashvibes' ), single_tag_title( '', false ) ); ?>
    </h1>

    <?php
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
                printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
    ?>
</header><!-- .archive-header -->


<p>Sorry, no posts matched your criteria.</p>

<!--end of Comment box-->
</div>

</div><!-- end of news -->

</div>
</section><!-- end of right panel -->

<?php get_footer(); ?>


 
</div> 
