<?php
/*
* Template Name: Home
*/
?>

<?php get_header(); ?>


<div id="clashvibes_content_front">
        
<section id="clashvibes_right_column_front">

<section id="clashvibes_banner">
 <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
</section>

<section id="new_released_section">
        
<h1>Latest Sound Clashes </h1>


<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
'category_name'=> 'new-clashes-front',
'post_type' => 'sound_clash_audio',

'post_count' => '4'
);
$wp_query = new WP_Query($args);
?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

<section class="new_released_box">

<figure class="thumb"><?php the_post_thumbnail(); ?></figure>
    
<h3><?php the_title() ?></h3>

<div class="rantsection">
    
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" />  
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/yellowstar.gif" alt="star" /> 
<img class="star" src="<?php bloginfo('url');?>/wp-content/uploads/sites/3/2015/08/whitestar.gif" alt="star" /> 

</div>

<span class="more_button"><?php the_excerpt(); ?></span>


</section>

<?php endwhile; else: ?>
<p>Oops! There are no posts to display.</p>
<?php endif; wp_reset_query(); ?>
   
</section><!--End of news release section-->
   <div class="clearfix"></div> 


<section id="topdownload_section">
          
          <h1>Top Audio Clashes</h1>
          
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 Boston</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Black Kat v Warlord 1996 Jamaica</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 1</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 2</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <div class="topdownload_box">
            <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 3</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <div class="topdownload_box">
            <section class="topdownload_box">
            <section class="title_singer">Matterhorn v Jaro v Adonia</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
        <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>

</section>

<section id="topdownload_section">
          
          <h1>Top Video Clashes</h1>
          
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 Boston</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Black Kat v Warlord 1996 Jamaica</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 1</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 2</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <div class="topdownload_box">
            <section class="topdownload_box">
            <section class="title_singer">World Clash 2001 Part 3</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <div class="topdownload_box">
            <section class="topdownload_box">
            <section class="title_singer">Matterhorn v Jaro v Adonia</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
        <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>
          <section class="topdownload_box">
            <section class="title_singer">Killamanjaro v Bass Oddesey 1996 New York</section>
            <span class="download_button"><a class="download_button" href="#">Listen</a></span> </section>

</section>
 
<div class="clearfix"></div>
</section><!-- end of right panel -->


    <?php get_footer(); ?>

 


