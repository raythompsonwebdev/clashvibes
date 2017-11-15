<?php get_header(); ?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">


        <h1><?php

					if ( is_category() ) {
						single_cat_title();
					} elseif ( is_tag() ) {
						single_tag_title();
					} elseif ( is_author() ) {
						the_post();
						echo 'Author Archives: ' . get_the_author();
						rewind_posts();
					} elseif ( is_day() ) {
						echo 'Daily Archives: ' . get_the_date();
					} elseif ( is_month() ) {
						echo 'Monthly Archives: ' . get_the_date('F Y');
					} elseif ( is_year() ) {
						echo 'Yearly Archives: ' . get_the_date('Y');
					} else {
						echo 'Sound Clash Video Archives';
					}

				?></h1>


        <section id="new_released_section">


            <?php
            $original_query = $wp_query;

            $wp_query = null;

            $args = array(
             
                'post_type' => 'clash_videos',
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

                            <span class="more_button"><a href="<?php the_permalink() ?>">View</a></span>


                        </figcaption>

                    </figure>

                </article>

                <?php endwhile;
else:
    ?>
                <p>Oops! There are no posts to display.</p>
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
