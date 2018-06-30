<?php
/**
 * *PHP version 5
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
		)
	);
	?>


<ul id="footer-content">

<li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clashvibes' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'clashvibes' ), 'WordPress' );
						?>
	</a></li>
<li><?php get_option( date( 'Y' ) ); ?>. All Rights Reserved</li>
<li>
<?php
				/* translators: 1: Theme name, 2: Theme author. */
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
<?php wp_footer(); ?> 

</body>
</html>
	
	
