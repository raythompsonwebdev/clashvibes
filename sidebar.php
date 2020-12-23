<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clashvibes
 */

if ( ! is_active_sidebar( 'Primary Sidebar' ) ) {
	return;
}
?>
<!--id="secondary"-->
<aside id="clashvibes_left_column" class="widget-area">
<?php
	if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) :
		?>

<!--class="clashvibes_left_column_box"-->
	<section class="widget ">

		<h2 class="widget-title"><?php esc_html__( 'Links', 'clashvibes' ); ?></h2>

	</section>
	<section class="widget">

		<h2 class="widget-title"><?php esc_html__( 'Links', 'clashvibes' ); ?></h2>

	</section>
	<?php endif; ?>
</aside><!-- #secondary -->
