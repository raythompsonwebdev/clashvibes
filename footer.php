<?php

/**
 * *PHP version 8.1.9
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

</div>

<footer id="colophon" class="site-footer">
	<?php
	wp_nav_menu(
		array(
			'menu'           => 'secondary',
			'container'      => 'footer',
			'theme_location' => 'Secondary',
		)
	);
	?>

	<ul id="footer-content"></ul>

	<ul id="social-media-box">

		<li>
			<a class="social-icon instagram-icon" href="<?php echo esc_url(__('https://instagram.com', 'clashvibes')); ?>" target="new" title="Follow me on Instagram">
				<span class="dashicons dashicons-instagram"></span>
			</a>
		</li>

		<li>
			<a class="social-icon twitter-icon" href="<?php echo esc_url(__('https://twitter.com', 'clashvibes')); ?>" target="new" title="Follow me on Twitter">
				<span class="dashicons dashicons-twitter"></span>
			</a>
		</li>

		<li>
			<a class="social-icon pinterest-icon" href="<?php echo esc_url(__('https://www.pinterest.co.uk/', 'clashvibes')); ?>" target="new" title="Follow me on Pinterest">
				<span class="dashicons dashicons-pinterest"></span>
			</a>
		</li>


	</ul>
</footer>

</div>


<div class="site-info copy">
	<a href="<?php echo esc_url(__('https://wordpress.org/', 'clashvibes')); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf(esc_html__('Proudly powered by %s', 'clashvibes'), 'WordPress');
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: 1: Theme name, 2: Theme author. */
	printf(esc_html__('Theme: %1$s by %2$s.', 'clashvibes'), 'clashvibes', '<a href="https://underscores.me/">raythompsonwebdev</a>');
	?>
</div>

<?php wp_footer(); ?>

</body>

</html>
