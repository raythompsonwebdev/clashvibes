
<?php get_header(); ?>


<div id="clashvibes_content_front">

    <section id="clashvibes_right_column_front">

        <section id="clashvibes_banner">
            
        </section>
 <h1>Latest Sound Clashes </h1>
        <section id="new_released_section">


            <?php
            
            $original_query = $wp_query;
            
            $wp_query = null;
            
            $args = array(
                'tax_query' => array(
                    
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'audio-category',
                        'field' => 'slug',
                        'terms' => 'new-releases'
                    ),
                    array(
                        'taxonomy' => 'video-category',
                        'field' => 'slug',
                        'terms' => 'new-releases'
                    )
            ),
                
                'post_type' => array('clash_audio', 'clash_videos'),
                
                'post_count' => '5'
           
                
                
            );
            $wp_query = new WP_Query($args);
            ?>

            <?php if ($wp_query -> have_posts()) : while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>

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
                    
                    'post_type' => 'clash_audio',
                    'post_count' => '4'
                );
                $wp_query = new WP_Query($args);
            ?>
   <?php if ($wp_query -> have_posts()) : while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
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
                    
                    'post_type' => 'clash_videos',
                    'post_count' => '5'
                );
                $wp_query = new WP_Query($args);
            ?>
   <?php if ($wp_query -> have_posts()) : while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
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
