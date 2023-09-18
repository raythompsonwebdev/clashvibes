<?php

/**
 * *PHP version 8.0
 *
 * Single Page | core/single.php.
 *
 * @category   Single_Page
 * @package    Clashvibes
 * @subpackage Single_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part('template-parts/content', get_post_type());

        the_post_navigation(
            array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'clashvibes') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'clashvibes') . '</span> <span class="nav-title">%title</span>',
            )
        );


        if (comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile;
    ?>


</main>

<?php

get_sidebar();

get_footer();
