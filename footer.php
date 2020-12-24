<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clashvibes
 */

?>

<div class="clearfix"></div>

</div>

<!-- <footer id="clashvibes_footer"> -->
	<footer id="colophon" class="site-footer">
			<?php
    wp_nav_menu(
        array(
            'menu' => 'secondary',
            'container' => 'footer',
            'theme_location' => 'Secondary',
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
               href="<?php echo esc_url(__('http://twitter.com/RayThompWeb', 'clashvibes')); ?>"
               target="new"
               title="Follow me on Twitter">
                <span>
                    <i class="fa fa-twitter"></i>
                </span>
            </a>
        </li>

        <li>
            <a class="social-icon facebook-icon" href="<?php echo esc_url(__('https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes')); ?>"
               target="new"
               title="Follow me on Facebook">
                <span>
                    <i class="fa fa-facebook"></i>
                </span>
            </a>
        </li>


    </ul>
	</footer><!-- #colophon -->

</div><!-- #page -->

<!--info-->
	<div class="site-info copy">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clashvibes' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'clashvibes' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'clashvibes' ), 'clashvibes', '<a href="http://underscores.me/">raythompsonwebdev</a>' );
				?>
	</div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>
