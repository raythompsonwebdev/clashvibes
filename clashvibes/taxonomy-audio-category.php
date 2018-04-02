<?php get_header(); 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div id="clashvibes_content">
    
        <?php get_sidebar('audio'); ?>

<section id="clashvibes_right_column">



<h1 class="archive-title">Audio Category: <?php single_cat_title(); ?></h1>

   <?php get_template_part('template-parts/content', 'custom'); ?>
	

</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
