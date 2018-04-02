<<<<<<< HEAD
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				clashvibes_posted_on();
				clashvibes_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
			</header><!-- .entry-header -->
			
		
		
		<?php clashvibes_post_thumbnail(); ?>

	
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

			<?php if (get_edit_post_link()) : ?>
			
                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                            sprintf(
                                    wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __('Edit <span class="screen-reader-text">%s</span>', 'clashvibes'), array(
                        'span' => array(
                            'class' => array(),
                        ),
                                            )
                                    ), get_the_title()
                            ), '<span class="edit-link">', '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->
                <?php endif; ?>
		
		
		</article>

			<?php endwhile;
			
			the_posts_navigation();

        else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>
=======
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clashvibes
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				clashvibes_posted_on();
				clashvibes_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
			</header><!-- .entry-header -->
			
		
		
		<?php clashvibes_post_thumbnail(); ?>

	
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

			<?php if (get_edit_post_link()) : ?>
			
                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                            sprintf(
                                    wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __('Edit <span class="screen-reader-text">%s</span>', 'clashvibes'), array(
                        'span' => array(
                            'class' => array(),
                        ),
                                            )
                                    ), get_the_title()
                            ), '<span class="edit-link">', '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->
                <?php endif; ?>
		
		
		</article>

			<?php endwhile;
			
			the_posts_navigation();

        else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
