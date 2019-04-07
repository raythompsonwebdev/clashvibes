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

			<li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clashvibes' ) ); ?>">
					<?php
					/* translators: %s: WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'clashvibes' ), 'WordPress' );
					?>
				</a>
			</li>
			<li><?php get_option( date( 'Y' ) ); ?>. All Rights Reserved</li>
			<li>
				<?php
								/* translators: %1$s by %2$s: Theme name, clashvibes: Raymond Thompson. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'clashvibes' ), 'clashvibes', '<a href="http://www.raythompsonwebdev.co.uk">raythompsonwebdev</a>' );
				?>
			</li>
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

</div>

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
	
	
