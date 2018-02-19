<?php get_header(); 

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div id="clashvibes_content">
    
        <?php get_sidebar('video'); ?>

<section id="clashvibes_right_column">


<h1 class="archive-title">Video Category: <?php single_cat_title(); ?></h1>

   <?php get_template_part('Templates/content', 'custom'); ?>


</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
