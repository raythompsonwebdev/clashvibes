   
    
<footer id="clashvibes_footer">
      
      
 <?php wp_nav_menu( array('menu' => 'Secondary', 'container' => 'footer' )); ?>


<ul id="footer-content">

<li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clashvibes' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'clashvibes' ), 'WordPress' );
			?></a></li>
<li><?php date('Y');?>. All Rights Reserved</li>
<li><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'clashvibes' ), 'clashvibes', '<a href="http://www.raythompsonwebdev.co.uk">raythompsonwebdev</a>' );
			?></li>
</ul>

<ul id="social-media-box">

<li>
<a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-instagram"></i></span></a></li>
<li><a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow me on Twitter"><span><i class="fa fa-twitter"></i></span></a></li> 
<li><a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Follow me on Facebook"><span><i class="fa fa-facebook"></i></span></a></li>



</ul>


 
</footer>
</div>
<?php wp_footer(); ?> 

</body>
</html>
    
	