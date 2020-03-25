<?php
/**
 * *PHP version 7
 *
 * *
 * Sidebar | core/sidebar.php.
 *
 * @category   Sidebar
 * @package    Clashvibes
 * @subpackage Sidebar
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

?>

<aside id="clashvibes_left_column">

 <h1>Blog</h1>

<section id="clashvibes_login">
	<?php get_search_form(); ?>
</section>

<section class="clashvibes_left_column_box">
	
	<?php
	if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) :
		?>
				   
		
	<section class="widget">

		<h2 class="widget-title"><?php esc_html__( 'Links', 'clashvibes' ); ?></h2>

	</section>
	<?php endif; ?>

</section>
	   
											
</aside>

