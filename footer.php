<?php
/**
 * *PHP version 7
 *
 * Footer | core/footer.php.
 *
 * @category   Footer
 * @package    Clashvibes
 * @subpackage Footer
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>  

  </main><!--end of main content-->

	<!--footer-->
	<footer id="clashvibes_footer">
				
		<?php
			wp_nav_menu(
				array(
					'menu'      => 'Secondary',
					'container' => 'footer',
					'theme_location' => 'secondary',
				)
			);
		?>

		<ul id="footer-content">
						
		</ul>

		<ul id="social-media-box">

			<li>
				<a class="social-icon linkedin-icon" 
					href="" 
					target="new" 
					title="Follow me on LinkedIn">
					<span>
						<i class="fa fa-instagram"></i>
					</span>
				</a>
			</li>

			<li>
				<a class="social-icon twitter-icon" 
				href="<?php echo esc_url( __( 'http://twitter.com/RayThompWeb', 'clashvibes' ) ); ?>" 
				target="new" 
				title="Follow me on Twitter">
				<span>
					<i class="fa fa-twitter"></i>
				</span>
				</a>
			</li> 

			<li>
				<a class="social-icon facebook-icon" href="<?php echo esc_url( __( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes' ) ); ?>" 
				target="new" 
				title="Follow me on Facebook">
				<span>
					<i class="fa fa-facebook"></i>
				</span>
				</a>
			</li>


		</ul>

  </footer>
  
  <!--info-->
  <p class="copy">
    <?php echo esc_attr( '&copy; 2018 - Raymond Thompson - UK :', 'clashvibes' ); ?>
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clashvibes' ) ); ?>" alt="wordpress.org" aria-label="https://wordpress.org/"></a>
        
        
      <?php
      /* translators: %1$s by %2$s: Theme name, clashvibes: Raymond Thompson. */
      printf( esc_html__( 'Theme: %1$s by %2$s.', 'clashvibes' ), 'clashvibes', '<a href="http://www.raythompsonwebdev.co.uk" rel="designer">Raymond Thompson</a>' );
      ?>
    <br/>

    <?php
    //$mysql_datetime = strftime( '%Y-%m-%d %H:%M:%S', $dt );
    $today = date("F j, Y, g:i a" ); 
    echo _e('Page was last updated : ') . $today ;
    //printf( esc_html__( 'Page was last updated :', 'clashvibes' ), __( $today, 'clashvibes' ), 'clashvibes' );
    ?>
  </p>

</div>
<!-- container end-->																											


<script type="text/javascript">
	WebFontConfig = {
		google: { families: [ 'Cabin:400,700', 'PT+Sans:400,700' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})(); 
</script>

<?php wp_footer(); ?> 

</body>
</html>
	
	
