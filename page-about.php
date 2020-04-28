<?php
/**
 * *PHP version 7
 *
 * Template Name: About
 *
 * About page | core/page-about.php.
 *
 * @category   About_Page
 * @package    Clashvibes
 * @subpackage About_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<article id="clashvibes-text">

	<h1><?php the_title(); ?> Page</h1>

		
	<p>
	<?php
		esc_html_e(
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
			'clashvibes'
		);
	?>
	</p>

	<h2><?php esc_html_e( 'Heading 1', 'clashvibes' ); ?></h2>

	<figure class="text-img"><!--/wp-content/themes/clashvibes/images/sampleimage(110x110).gif-->
		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/sites/2/2018/07/sampleimage110x110.gif" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">
	</figure>

	<p>
	<?php
	esc_html_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>
	<?php
	esc_html_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>

	<h2><?php esc_html_e( 'Heading 1', 'clashvibes' ); ?></h2>

	<figure class="text-img">
		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/sites/2/2018/07/sampleimage110x110.gif" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">
	</figure>

	<p>
	<?php
	_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>
	<?php
	esc_html_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>

	<h2><?php esc_html_e( 'Heading 1', 'clashvibes' ); ?></h2>

	<figure class="text-img">
		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/sites/2/2018/07/sampleimage110x110.gif" alt="<?php esc_attr_e( 'sliderimage', 'clashvibes' ); ?>">
	</figure>

	<p>
	<?php
	esc_html_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>

	<p>
	<?php
	esc_html_e(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consequat tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec diam nibh, porttitor in mauris sed, lacinia maximus nulla. Nulla tempus vitae dolor eu aliquet. Proin molestie lacinia metus,',
		'clashvibes'
	);
	?>
	</p>

</article>


<?php get_footer(); ?>
