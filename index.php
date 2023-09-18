<?php

/**
 * *PHP version 8.1
 *
 * Index Page | core/index.php.
 *
 * @category   Index_Page
 * @package    Clashvibes
 * @subpackage Index_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();

get_sidebar();
?>
<main id="primary" class="site-main">

    <?php
    if (have_posts() ) :

        if (is_home() && ! is_front_page() ) :
            ?>

            <h2 class="page-title"><?php single_post_title(); ?></h2>


        <?php endif; ?>

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part('template-parts/content', get_post_type());

        endwhile;
        the_posts_navigation();
        ?>
    <?php else : ?>
        <?php

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main>

<?php

get_footer();
