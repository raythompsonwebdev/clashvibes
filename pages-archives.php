<?php
/*
* Template Name: Archives-pages
*/
?>

<?php get_header(); ?>

 </div>
  <div id="clashvibes_content">
 	<?php get_sidebar(); ?>

<div id="clashvibes_right_column">
        	
<div id="new_released_section">
            	
<h1>Latest Sound Clashes <a href="http://www.photohq.com" title="photos"  target="_blank">photos</a></h1>
            	
<div class="new_released_box">
                
<img src="images/bassvsjaro2.jpg" alt="image" width="180" height="140" />
                    <h3>Album No. 1</h3> 
                    <h4>Artist Name 1</h4>  
              <div class="rantsection">
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/whitestar.gif" alt="star" />
                    </div>
                    <div class="more_button"><a href="#">More</a></div>
				</div>
                <div class="new_released_box">
                <img src="images/Imperial+Faith+in+association+with+Tatiana+Productions+Presents+.jpg" alt="image" width="180" height="140" />
                    <h3>Album No. 2</h3> 
                    <h4>Artist Name 2</h4>  
                    <div class="rantsection">
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/whitestar.gif" alt="star" />
                        <img class="star" src="images/whitestar.gif" alt="star" />
                    </div>
                    <div class="more_button"><a href="#">More</a></div>
				</div>
                <div class="new_released_box">
                <img src="images/K-Zone+Promotion+Presents+.jpg" alt="image" width="180" height="137" />
                    <h3>Album No. 3</h3> 
                    <h4>Artist Name 3</h4>  
                    <div class="rantsection">
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/yellowstar.gif" alt="star" />
                        <img class="star" src="images/whitestar.gif" alt="star" />
                        <img class="star" src="images/whitestar.gif" alt="star" />
                    </div>
                    <div class="more_button"><a href="#">More</a></div>
				</div>
				
            </div>
        
<div class="clashvibes_right_panel_fullwidth">
<div id="news_section" class="left-col archives">

<div class="news_box">
<h1>News </h1>
<h2>Archives by Month:</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
<h2>Archives by Subject:</h2>
<ul>
<?php wp_list_categories('hierarchical=0&title_li='); ?>
</ul>
</div>

<div class="news_box">
</div>

</div>
				<!-- end of news -->
</div>                

<?php get_sidebar(); ?>
<?php get_footer(); ?>       

</div> <!-- end of top download -->





