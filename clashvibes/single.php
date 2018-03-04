<?php get_header(); ?>

<div id="clashvibes_content">
    
    <?php get_sidebar(); ?>

    <section id="clashvibes_right_column">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  


        <?php get_template_part('template-parts/content', 'single'); ?>


    </section>
    
<?php get_footer(); ?>