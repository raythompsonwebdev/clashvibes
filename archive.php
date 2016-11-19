
<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="clashvibes_content">


<section id="clashvibes_right_column">

<section class="clashvibes_right_panel_fullwidth">

<?php if ( have_posts() ) : ?>
<h1><?php // Output the category title
      if ( is_category() ) { single_cat_title(); }
      // Output the tag title
      elseif ( is_tag() ) { single_tag_title();
      // For everything else

      } else { _e('Browsing the Archive', 'clashvibes'); }
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

<div class="navi">
<div class="right"><?php previous_posts_link('Previous'); ?> / <?php next_posts_link('Next'); ?></div>
</div>

</div>

</div><!-- end of news -->

</section>
</section><!-- end of right panel -->
</div>
<?php get_footer(); ?>
