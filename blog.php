<?php
/*

  Template Name: blog

 */
?>
<?php get_header(); ?>


<div id="clashvibes_content">

<?php get_sidebar(); ?>

    <section id="clashvibes_right_column">
        <section id="clashvibes_banner">


        </section>


<?php get_template_part('Templates/content', get_post_format()); ?>




    </section><!-- end of right panel -->


<?php get_footer(); ?>