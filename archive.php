
<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">


<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

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
<div id="news_section">

     <?php while ( have_posts() ) : the_post(); ?>

<div class="news_box">
 <h2>Archives by Month:</h2>
<ul>
<?php
// Arguments
$args = array('type' => 'monthly' );
    wp_get_archives($args); ?>
</ul>

<h2>Archives by Subject:</h2>
<ul>
<?php
 // Arguments
 $args = array('title_li' => '' );

wp_list_categories(); ?>

</ul>

<?php endwhile; else: ?>

<p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

</div>

</div><!-- end of news -->

</section>
</section><!-- end of right panel -->
</div>
<?php get_footer(); ?>
