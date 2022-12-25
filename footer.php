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
