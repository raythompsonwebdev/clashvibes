 <?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">



<section id="clashvibes_right_column">

    <section class="clashvibes_right_panel_fullwidth">
 
    <?php if (have_posts()) : ?>

<article class="post group"<?php post_class() ?> id="post-<?php the_ID(); ?>">
   
            <header class="page-header">
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
    
    <figure class="thumb"><?php the_post_thumbnail(); ?></figure>

    <section class="newsExcerpt"><?php the_excerpt();?></section>

    <br/>

    <footer class="byline">
    Posted in category :<?php the_category(', ') ?>
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
<br/>
<p>
    <?php $lastmodified = get_the_modified_time('U'); $posted = get_the_time('U');
    if ($lastmodified > $posted) {
    echo "Edited " . human_time_diff(get_the_time('U'),	get_the_modified_time('U')) . " later";
    }?>
</p>

</footer>
</article>

<?php endwhile; ?>
<?php else: ?>

<h1>No posts to show</h1>
<p>Sorry, we got nada. Nothing. Bupkis. Zippo. Diddly-squat. Sorry to disappoint.</p>
<?php endif; wp_reset_query();?>


<div class="clearfix"></div>
</section><!-- end of clashvibes_right_panel_fullwidth -->

</section><!-- end of right panel -->

<?php get_footer(); ?>
