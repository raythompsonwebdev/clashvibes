<!--Post loop start -->
    <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>


<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

<header class="entry-header">

<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

<section class="byline">
<span> Date <?php the_time('jS F Y') ?></span>
<span> at <?php the_time('g:i a'); ?></span>
    <span>Written by <?php the_author() ?></span>
</section>

</header>

    <figure class="thumb"><?php the_post_thumbnail('featured-image'); ?></figure>

    <div class="newsExcerpt"><?php the_excerpt();?></div>

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

<?php get_template_part( 'templates/content', 'none' ); ?>

    <?php endif; ?>


<div class="clearfix"></div>