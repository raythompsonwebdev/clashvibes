<<<<<<< HEAD
<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <section class="<?php if (is_404()) {
    echo 'error-404';
} else {
    echo 'no-results';
} ?> not-found">
        <header class="entry-header">
            <h1 class="page-title">
                <?php
                if (is_404()) {
                    esc_html_e('Page not available', 'clashvibes');
                } else if (is_search()) {
                    /* translators: %s = search query */
                    printf(esc_html__('Nothing found for &ldquo;%s&rdquo;', 'clashvibes'), '<em>' . get_search_query() . '</em>');
                } else {
                    esc_html_e('Nothing Found', 'clashvibes');
                }
                ?>
            </h1>
        </header><!-- .page-header -->

        <div class="entry-content">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>

                <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'clashvibes'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

            <?php elseif (is_search()) : ?>

                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'clashvibes'); ?></p>
                <?php get_search_form(); ?>

            <?php elseif (is_404()) : ?>

                <p><?php esc_html_e('You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'raythompsonwebdev-com'); ?></p>
                <?php get_search_form(); ?>

            <?php else : ?>

                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'clashvibes'); ?></p>

            <?php get_search_form(); ?>

            <?php endif; ?>
      
            <?php
            if (is_404() || is_search()) {
                ?>
                <h1 class="page-title secondary-title"><?php esc_html_e('Most recent posts:', 'clashvibes'); ?></h1>
                <?php
                // Get the 6 latest posts
                $args = array(
                    'posts_per_page' => 6
                );
                $latest_posts_query = new WP_Query($args);
                // The Loop
                if ($latest_posts_query->have_posts()) {
                    while ($latest_posts_query->have_posts()) {
                        $latest_posts_query->the_post();
                        // Get the standard index page content
                        get_template_part('template-parts/content', get_post_format());
                    }
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } // endif	
            ?>


        </div><!-- .page-content -->

        <footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->

    </section><!-- .no-results -->

=======
<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <section class="<?php if (is_404()) {
    echo 'error-404';
} else {
    echo 'no-results';
} ?> not-found">
        <header class="entry-header">
            <h1 class="page-title">
                <?php
                if (is_404()) {
                    esc_html_e('Page not available', 'clashvibes');
                } else if (is_search()) {
                    /* translators: %s = search query */
                    printf(esc_html__('Nothing found for &ldquo;%s&rdquo;', 'clashvibes'), '<em>' . get_search_query() . '</em>');
                } else {
                    esc_html_e('Nothing Found', 'clashvibes');
                }
                ?>
            </h1>
        </header><!-- .page-header -->
   

        <div class="entry-content">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>

                <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'clashvibes'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

            <?php elseif (is_search()) : ?>

                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'clashvibes'); ?></p>
                <?php get_search_form(); ?>

            <?php elseif (is_404()) : ?>

                <p><?php esc_html_e('You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'raythompsonwebdev-com'); ?></p>
                <?php get_search_form(); ?>

            <?php else : ?>

                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'clashvibes'); ?></p>

            <?php get_search_form(); ?>

            <?php endif; ?>
                

        </div><!-- .page-content -->

    </section><!-- .no-results -->

>>>>>>> 9fbc4300d8ebb1da52ad1d1e8f23532c220590fc
</article>