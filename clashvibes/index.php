<?php get_header(); ?>



<div id="clashvibes_content">
<?php get_sidebar(); ?>

<section id="clashvibes_right_column">


<?php get_template_part('template-parts/content', get_post_format()); ?>


</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
