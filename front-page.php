
<?php get_header(); ?>


<div id="clashvibes_content_front">

    <section id="clashvibes_right_column_front">

        <section id="clashvibes_banner">
            <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
        </section>
 <h1>Latest Sound Clashes </h1>
        <section id="new_released_section">


            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args = array(
                'category_name' => 'new-releases',
                'post_type' => array('sound_clash_audio','sound_clash_video'),
                'post_count' => '5'
            );
            $wp_query = new WP_Query($args);
            ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <section class="new_released_box">

                        <figure class="thumb"><?php the_post_thumbnail(); ?></figure>

                        <h3><?php the_title() ?></h3>

                        <div class="rantsection">

                            <img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
                            <img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
                            <img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
                            <img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/yellowstar.gif" alt="star" />
                            <img class="star" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/2/2017/04/whitestar.gif" alt="star" />

                        </div>

                        <span class="more_button"><a class="download_button" href="<?php the_permalink() ?>">Listen</a></span>


                    </section>

                <?php endwhile;
            else: ?>
                <p>Oops! There are no posts to display.</p>
            <?php endif;
            wp_reset_query(); ?>

                <div class="clearfix"></div>
        </section><!--End of news release section-->


        <div>
        <section id="topdownload_section">

            <h1>Top Audio Clashes</h1>
             <?php
                $original_query = $wp_query;
                $wp_query = null;
                $args = array(
                    'category_name' => 'new-audio-clashes',
                    'post_type' => 'sound_clash_audio',
                    'post_count' => '4'
                );
                $wp_query = new WP_Query($args);
            ?>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="topdownload_box">
                <section class="title_singer"><?php the_title() ?></section>
                <span class="download_button"><a class="download_button" href="<?php the_permalink() ?>">Listen</a></span>
            </section>

             <?php endwhile;
            else: ?>
                <p>Oops! There are no posts to display.</p>
            <?php endif;
            wp_reset_query(); ?>



        </section>

        <section id="topdownload_section">

            <h1>Top Video Clashes</h1>
             <?php
                $original_query = $wp_query;
                $wp_query = null;
                $args = array(
                    'category_name' => 'new-video-clashes',
                    'post_type' => 'sound_clash_video',
                    'post_count' => '4'
                );
                $wp_query = new WP_Query($args);
            ?>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="topdownload_box">
                <section class="title_singer"><?php the_title() ?></section>
                <span class="download_button"><a class="download_button" href="<?php the_permalink() ?>">Listen</a></span>
            </section>

             <?php endwhile;
            else: ?>
                <p>Oops! There are no posts to display.</p>
            <?php endif;
            wp_reset_query(); ?>



        </section>
            <div>
<div class="clearfix"></div>
</section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
