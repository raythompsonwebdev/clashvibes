
<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">


<section id="clashvibes_right_column">


<?php if ( have_posts() ) : ?>
<h1><?php

    if ( is_category() ) {
        single_cat_title();
    } elseif ( is_tag() ) {
        single_tag_title();
    } elseif ( is_author() ) {
        the_post();
        echo 'Author Archives: ' . get_the_author();
        rewind_posts();
    } elseif ( is_day() ) {
        echo 'Daily Archives: ' . get_the_date();
    } elseif ( is_month() ) {
        echo 'Monthly Archives: ' . get_the_date('F Y');
    } elseif ( is_year() ) {
        echo 'Yearly Archives: ' . get_the_date('Y');
    } else {
        echo 'Archives:';
    }

?></h1>
    
     <?php while ( have_posts() ) : the_post(); ?>
    
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <h2>Archives by Month:</h2>
    <ul>
    <?php
    // Arguments
    $args = array('type' => 'monthly' );
    wp_get_archives($args); ?>
    </ul>

    <h2>Archives by Category:</h2>
    <ul>
    <?php
     // Arguments
     $args = array('title_li' => '' );

    wp_list_categories($args); ?>

    </ul>
    
    <h2>Archives by Tag:</h2>
    <ul>
    <?php

    get_the_tag_list('<li>Tags: ',', ','</li>'); ?>

    </ul>

    <?php endwhile; 
    else: ?>

    <p><?php _e('No posts were found. Sorry!'); ?></p>
    <?php endif; ?>

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

</section><!-- end of right panel -->
</div>
<?php get_footer(); ?>
