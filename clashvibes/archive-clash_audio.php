<?php get_header(); ?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">

                <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					
				?>
        </h1>

        <section id="new_released_section">


            <?php
            $original_query = $wp_query;

            $wp_query = null;

            $args = array(
                
                'post_type' => 'clash_audio',
                'post_count' => '5'
            );
            $wp_query = new WP_Query($args);
            ?>

                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <article class="new_released_box">

                    <h1>
                        <?php the_title() ?>
                    </h1>

                    <figure class="thumb">
                        <?php the_post_thumbnail(); ?>

                        <figcaption>

                            <span class="more_button"><a href="<?php the_permalink() ?>">Listen</a></span>


                        </figcaption>

                    </figure>

                </article>

                <?php endwhile;
else:
    ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
                <?php endif;
wp_reset_query();
?>

                <div class="clearfix"></div>
        </section>
        <!--End of news release section-->

        <div class="clearfix"></div>

    <!-- end of right panel -->



    </section>
</div>



    <?php get_footer(); ?>
