<?php
/**
 * *PHP version 7
 * 
 * Tag page | core/tag.php.
 *
 * @category   Tag_Page
 * @package    Clashvibes
 * @subpackage Tag_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<?php get_sidebar(); ?>


  	<h1 class="archive-title">Tag: <?php single_tag_title( '', true ); ?></h1>
    <section id="clashvibes_right_column">
    		
		<!-- Display optional tag description-->
		<?php if ( tag_description() ) : ?>

				<div class="archive-meta"><?php echo tag_description(); ?></div>
		
			<?php endif; ?>
 
		<?php 	
		
			get_template_part( 'template-parts/content', get_post_format() );
			
		?>

    </section><!-- end of right panel -->

<?php get_footer(); ?>


 
</div> 
