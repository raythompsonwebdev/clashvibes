<?php get_header(); ?>


<div id="clashvibes_content_front">

    <section id="clashvibes_right_column_front">

        <section id="clashvibes_banner">
            
            
        </section>

        <h1>Latest Sound Clashes </h1>
        
<!--Start of news release section-->
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
                        'terms' => 'new-releases',
                    ),
                    array(
                        'taxonomy' => 'video-category',
                        'field' => 'slug',
                        'terms' => 'new-releases',
                    )
                ),
                'post_type' => array('clash_audio', 'clash_videos'),
                'post_count' => '5'
            );
            $wp_query = new WP_Query($args);
            ?>

                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <article class="new_released_box">

                    <h1>
                        <?php the_title() ?>
                    </h1>

                    <figure class="thumbaud">
                       
                        <?php the_post_thumbnail(); ?>

                        <figcaption>
                            
                                                
                    <?php if ('clash_audio' == get_post_type()) : ?>
                           <span class="Morebutton"><a href=" <?php the_permalink() ?> " title="Listen to <?php the_title_attribute() ?>">Listen</a></span>
                           
                           <?php else : ?>
                           
                           <span class="Morebutton"><a href=" <?php the_permalink() ?> " title="View <?php the_title_attribute() ?> Video">View</a></span>
                           <?php endif; ?>
                           
                        </figcaption>

                    </figure>
                    <div class="clearfix"></div> 
                </article>

                <?php endwhile;
else:
    ?>
                <article class="new_released_box">

<figure class="thumbaud">
    

    <figcaption>

        <p>Sorry! No new clashes to display.</p>


    </figcaption>

</figure>

</article>
                <?php endif;
wp_reset_query();
?>

     
        </section>
        <!--End of news release section-->


        <div id="topdownload_section_ctner">
            <!--Top 10 Audio Section-->
            <ul id="topdownload_section">

                <h1>Top Audio Clashes</h1>
                <?php
                    $original_query = $wp_query;
                    $wp_query = null;
                    $args = array(
                        'tax_query' => array(
                            
                            array(
                                'taxonomy' => 'audio-category',
                                'field' => 'slug',
                                'terms' => 'top-audio',
                            )
                        ),
                        'post_type' => 'clash_audio',
                        'post_count' => '5'
                    );
                    $wp_query = new WP_Query($args);
                    ?>
                    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li class="topdownload_box">
                        <span class="image_thumb"><a href="" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail(); ?></a></span>
                        <span class="title_singer"><?php the_title() ?></span>
                        <span><a href="<?php the_permalink() ?>" title="Listen to <?php the_title_attribute() ?>">Listen</a></span>
                    </li>

                    <?php endwhile;
                else:
                    ?>
                    <p>Oops! There are no posts to display.</p>
                    <?php endif;
wp_reset_query();
?>



            </ul>
            <div class="clearfix"></div> 
            <!--Top 10 Video Section-->
            <ul id="topdownload_section">

                <h1>Top Video Clashes</h1>
                <?php
                    $original_query = $wp_query;
                    $wp_query = null;
                    $args = array(
                        'tax_query' => array(
                            
                            array(
                                'taxonomy' => 'video-category',
                                'field' => 'slug',
                                'terms' => 'top-video',
                            )
                        ),
                        'post_type' => 'clash_videos',
                        'post_count' => '5'
                    );
                    $wp_query = new WP_Query($args);
                    ?>
                    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li class="topdownload_box">
                       <span class="image_thumb"><a href="" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail(); ?></a></span>
                        <span class="title_singer"><?php the_title() ?></span>
                        <span><a href="<?php the_permalink() ?>" title="View <?php the_title_attribute() ?> Video">View</a></span>
                    </li>

                    <?php endwhile; else:  ?>
                    
                    <p>Oops! There are no posts to display.</p>
                    
                    <?php endif;
                wp_reset_query();
                ?>



            </ul>
            
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- end of right panel -->

    </div>
    <?php get_footer(); ?>
