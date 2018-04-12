

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">

    <section id="clashvibes_right_column">

        <h1 class="archive-title">Categories: <?php single_cat_title(); ?></h1>

        <!--Post loop start -->
        <?php get_template_part('template-parts/content', get_post_format()); ?>


        </article><!-- end of news -->


    </section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
