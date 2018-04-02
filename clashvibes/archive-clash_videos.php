<<<<<<< HEAD:clashvibes/archive-clash_videos.php
<?php
/**
 * *PHP version 5
 *
 * Archive Clash Videos | core/archive-clash_videos.php.
 *
 * @category   Archive_Clash_Videos
 * @package    Clashvibes
 * @subpackage Archive_Clash_Videos
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk 
 */
 
 get_header();?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">


        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
           
        ?>


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
                        <?php the_title();?>
                    </h1>

                    <figure class="thumbvid">
                        <?php the_post_thumbnail(); ?>

                        <figcaption>

                            <span class="Morebutton"><a href="<?php the_permalink() ?>" >View</a></span>


                        </figcaption>

                    </figure>

                </article>

                <?php endwhile;
else:
    ?>
                <article class="new_released_box">

<figure class="thumb">
    

    <figcaption>

        <p><?php _e('Sorry! No Video clashes to display.','clashvibes')?></p>
        


    </figcaption>

</figure>

</article>
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
=======
<?php
/**
 * *PHP version 5
 *
 * Archive Clash Videos | core/archive-clash_videos.php.
 *
 * @category   Archive_Clash_Videos
 * @package    Clashvibes
 * @subpackage Archive_Clash_Videos
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk 
 */
 
 get_header();?>

<div id="clashvibes_content_front">


    <section id="clashvibes_right_column_front">


        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
           
        ?>


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
                        <?php the_title();?>
                    </h1>

                    <figure class="thumbvid">
                        <?php the_post_thumbnail(); ?>

                        <figcaption>

                            <span class="Morebutton"><a href="<?php the_permalink() ?>" >View</a></span>


                        </figcaption>

                    </figure>

                </article>

                <?php endwhile;
else:
    ?>
                <article class="new_released_box">

<figure class="thumb">
    

    <figcaption>

        <p><?php _e('Sorry! No Video clashes to display.','clashvibes')?></p>
        


    </figcaption>

</figure>

</article>
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
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357:clashvibes/archive-clash_videos.php
