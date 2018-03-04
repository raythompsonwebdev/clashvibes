<?php
/*

  Template Name: blog

 */
?>
<?php get_header(); ?>



<div id="clashvibes_content">
<?php get_sidebar(); ?>

<section id="clashvibes_right_column">

<!--Post loop start -->
    <?php if (have_posts()) : ?>

   <?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/content', get_post_format()); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>