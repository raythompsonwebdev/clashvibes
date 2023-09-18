<?php

/**
 * *PHP version 8.0
 *
 * Front page | core/front-page.php.
 *
 * @category   Front_Page
 * @package    Clashvibes
 * @subpackage Front_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 */

get_header(); ?>


<section id="clashvibes-banner">

    <img src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2023/06/sliderimage.webp" alt="<?php esc_attr_e('sliderimage', 'clashvibes'); ?>">

</section>
<h2><?php esc_html_e('Latest Sound Clashes ', 'clashvibes'); ?></h2>

<section id="new-releases-section">

    <?php

    $new_releases_args = array(
    'post_type'      => 'post',
    'category_name'  => 'new releases',
    'post_count'     => '5',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    );

    $new_clashes_query = new WP_Query($new_releases_args);
    ?>

    <?php


    if ($new_clashes_query->have_posts() ) :
        while ( $new_clashes_query->have_posts() ) :
            $new_clashes_query->the_post();

            ?>
            <figure class="new-releases-item">

            <?php
            the_post_thumbnail('thumbnail', array( 'class' => 'new-release-thumb' ));
            ?>


                <figcaption class="new-releases-caption">
                    <h3 class="new-releases-header">
            <?php echo esc_html(the_title()); ?>
                    </h3>

            <?php if (is_category('audio-clashes') ) : ?>
                        <a class="new-release-btn" href=" <?php echo esc_url(get_permalink(), 'clashvibes'); ?> " title="Listen to <?php the_title_attribute(); ?>">
                <?php esc_html_e('Listen', 'clashvibes'); ?></a>

                    <?php else : ?>

                        <a class="new-release-btn" href=" <?php echo esc_url(get_permalink(), 'clashvibes'); ?> " title="View <?php the_title_attribute(); ?> Video">
                        <?php esc_html_e('View', 'clashvibes'); ?></a>
                    <?php endif; ?>

                </figcaption>

            </figure>
            <?php
            wp_reset_postdata();
            ?>
        <?php endwhile; ?>
    <?php else : ?>

        <article class="new-releases-item">

            <figure class="new-release-thumb">

                <figcaption class="new-releases-caption">

                    <h3 class="new-releases-header"><?php esc_html_e('Sorry! No clashes to display.', 'clashvibes'); ?></h3>

                </figcaption>

            </figure>

        </article>

    <?php endif; ?>



</section>

<div id="top-clashes-section">

    <section id="top-audio-clashes">

        <h4 class="top-clashes-title"><?php esc_html_e('Top Audio Clashes ', 'clashvibes'); ?></h5>
            <?php

            $top_audio_args  = array(
                'post_type'      => 'post',
                'category_name'  => 'top-audio',
                'post_count'     => '5',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
            );
            $top_audio_query = new WP_Query($top_audio_args);

            ?>
            <?php
            if ($top_audio_query->have_posts() ) :
                while ( $top_audio_query->have_posts() ) :
                    $top_audio_query->the_post();
                    ?>
                    <span class="top-clash-item">

                        <span class="top-clash-img">
                            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('popular-image'); ?>
                            </a>
                        </span>

                        <span class="top-clash-name">
                    <?php echo esc_html(the_title()); ?>
                        </span>

                        <a class="top-clash-link" href="<?php echo esc_url(get_permalink(), 'clashvibes'); ?>" title="Listen to <?php the_title_attribute(); ?>">
                    <?php esc_html_e('Listen', 'clashvibes'); ?>
                        </a>

                    </span>
                    <?php
                    wp_reset_postdata();
                    ?>
                <?php endwhile; ?>
            <?php else : ?>

                <p><?php esc_html_e('Oops! There are no posts to display.', 'clashvibes'); ?></p>

            <?php endif; ?>

    </section>

    <section id="top-video-clashes">

        <h4 class="top-clashes-title"><?php esc_html_e('Top Video Clashes', 'clashvibes'); ?></h4>

        <?php

        $top_video_args = null;
        $top_video_args = array(
        'post_type'      => 'post',
        'category_name'  => 'top-video',
        'post_count'     => '5',
        'post_status'    => 'publish',
        'posts_per_page' => -1,

        );
        $top_video_query = new WP_Query($top_video_args);
        ?>

        <?php
        if ($top_video_query->have_posts() ) :
            while ( $top_video_query->have_posts() ) :
                $top_video_query->the_post();
                ?>

                <span class="top-clash-item">

                    <span class="top-clash-img">
                        <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('popular-image'); ?>
                        </a>
                    </span>

                    <span class="top-clash-name">
                <?php echo esc_html(the_title()); ?>
                    </span>

                    <a class="top-clash-link" href="<?php echo esc_url(get_permalink()); ?>" title="View <?php the_title_attribute(); ?> Video">
                <?php esc_html_e('View', 'clashvibes'); ?>
                    </a>

                </span>

            <?php endwhile; ?>
        <?php else : ?>

            <p><?php esc_html_e('Oops! There are no posts to display.', 'clashvibes'); ?></p>

            <?php
        endif;
        wp_reset_postdata();
        ?>

    </section>

</div>

<?php get_footer(); ?>
