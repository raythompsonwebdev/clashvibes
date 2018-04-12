<?php
/**
 * *PHP version 5
 * 
 * Taxonomy Page | core/taxonomy.php.
 *
 * @category   Taxonomy_Page
 * @package    Clashvibes
 * @subpackage Taxonomy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */ 
 get_header(); ?>

<div id="clashvibes_content">
    
        <?php get_sidebar(); ?>


    <section id="clashvibes_right_column">


            <?php if (have_posts()) : ?>

                <article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <header class="entry-header">
                        <h1 class="page-title">
                            <?php
                            $current_term = get_queried_object();
                            $taxonomy = get_taxonomy($current_term->taxonomy);
                            echo $taxonomy->label . ':' . $current_term->name;
                            ?>
                        </h1>
                        <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if (!empty($term_description)) :
                            printf('<div class="taxonomy-description">%s</div>', $term_description);
                        endif;
                        ?>
                    </header><!-- .page-header -->

                    <?php
                    if (is_author() && get_the_author_meta('description')) {
                        echo '<div class="author-index shorter">';
                        get_template_part('inc/author', 'box');
                        echo '</div>';
                    }
                    ?>

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <figure class="thumb">
                        <?php clashvibes_post_thumbnail(); ?>
                        </figure>

                        	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clashvibes' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clashvibes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php clashvibes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
                    </article>

    <?php endwhile; ?>
            <?php else: ?>

<?php get_template_part('template-parts/content', 'none'); ?>

<?php endif;?>


            <div class="clearfix"></div>


    </section><!-- end of right panel -->

<?php get_footer(); ?>
