<?php

/**
 * *PHP version 8.0
 *
 * Category page | core/category.php.
 *
 * @category   Category_Page
 * @package    Clashvibes
 * @subpackage Category_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();
?>

<?php

if (is_category('audio-clashes') ) :
    get_sidebar('audio');
elseif (is_category('video-clashes') ) :
    get_sidebar('video');
elseif (is_category('clash-events') ) :
    get_sidebar('events');
else :
    get_sidebar();
endif;
?>

<main id="primary" class="site-main">

    <?php
    /**
     * Check if there are any posts to display.
     */
    if (have_posts() ) :
        ?>

        <h2 class="archive-title"><?php single_cat_title('Category : ', 'clashvibes'); ?></h2>


        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article <?php post_class('blog-card'); ?> id="post-<?php the_ID(); ?>">

                <header class="entry-header">
            <?php
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

            if ('post' === get_post_type() ) :
                ?>
                        <div class="entry-meta">
                <?php
                clashvibes_posted_on();

                ?>
                        </div>
                <?php
            endif;
            ?>
                </header>

                <!--featured Image-->
                <a href="<?php echo esc_url(get_permalink()); ?>" title="Permanent Link to <?php the_title_attribute(); ?>;">

            <?php if (has_post_thumbnail() ) : ?>

                <?php clashvibes_post_thumbnail(); ?>

                    <?php else : ?>

                    <?php endif; ?>

                </a>

                <div class="entry-content">
            <?php
            the_excerpt();

            ?>

                </div>


            <?php if (get_edit_post_link() ) : ?>
                    <footer class="entry-footer">
                <?php clashvibes_entry_footer(); ?>
                    </footer>
            <?php endif; ?>

            </article>

        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-part/content', 'none'); ?>

    <?php endif; ?>




</main>


<?php get_footer(); ?>
