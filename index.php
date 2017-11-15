<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">


<section id="clashvibes_right_column">

    <section class="clashvibes_right_panel_fullwidth">

<?php get_template_part('Templates/content', get_post_format()); ?>

</section><!-- end of clashvibes_right_panel_fullwidth -->

</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
