<?php get_header(); ?>

<?php get_sidebar('audio'); ?>

<div id="clashvibes_content">

    <section id="clashvibes_right_column">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">

                        <h1 class="entry-title">
                            <span> Sound Clash Audio:</span> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h1>

                        <section class="byline"> 
                            <span>Uploaded by :<?php the_author() ?></span>
                              <span> Date: <?php the_time('jS F Y') ?></span>
                               <span> at :<?php the_time('g:i a'); ?></span>

                                    </section>          

                                    </header>

                                    <figure class="thumb"><?php the_post_thumbnail(); ?></figure> 

                                    <section class="newsExcerpt">
                                        <?php the_content(); ?>

                                        <div id="audio_controls">

                                            <div id="play_toggle" class="player-button">PLAY</div>

                                            <div id="progress">
                                                <div id="load_progress"></div>
                                                <div id="play_progress"></div>
                                            </div>

                                            <div id="time">
                                                <div id="duration">00:00</div>  
                                                <div id="current_time">00:00</div>  

                                            </div>
                                        </div>

                                    </section>

                                    <br/>

                                    <footer class="speaker-meta">
                                        <?php the_meta(); ?>
                                    </footer>


                                    </article>
                                <?php endwhile;
                            else:
                                ?>
                                <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

                            </section><!-- end of clashvibes_right_panel_fullwidth -->

                            </div><!-- end of right panel -->

<?php get_footer(); ?>