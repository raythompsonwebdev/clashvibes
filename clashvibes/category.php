

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="clashvibes_content">

    <section id="clashvibes_right_column">


        <h1 class="archive-title">Category1:<?php single_cat_title(); ?></h1>


        <!--Post loop start -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <header class="entry-header">

                        <h1>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>

                        <?php if (category_description()) : ?>

                            <div class="archive-meta">
                                <?php echo category_description(); ?>
                            </div>
                        <?php endif; ?>
                        <section class="byline">
                            <span> Date <?php the_time('jS F Y') ?></span>
                            <span> at <?php the_time('g:i a'); ?></span>
                            <span>Written by <?php the_author() ?></span>
                        </section>

                    </header>

                    <figure class="thumb"><?php the_post_thumbnail(); ?></figure>

                    <div class="newsExcerpt"><?php the_content(); ?></div>

                    <br>

                    <footer class="byline">
                        Posted in category :<?php the_category(', ') ?>
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                        <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                        <br/>
                        <p>
                            <?php
                            $lastmodified = get_the_modified_time('U');
                            $posted = get_the_time('U');
                            if ($lastmodified > $posted) {
                                echo "Edited " . human_time_diff(get_the_time('U'), get_the_modified_time('U')) . " later";
                            }
                            ?>
                        </p>

                    </footer>

                <?php endwhile;
            else:
                ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>



        </article><!-- end of news -->


    </section><!-- end of right panel -->

</div>
<?php get_footer(); ?>
