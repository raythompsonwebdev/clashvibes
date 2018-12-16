<?php
/**
 * *PHP version 5
 *
 * Template Name: Events
 *
 * Events page | core/page-events.php.
 *
 * @category   Events_Page
 * @package    Clashvibes
 * @subpackage Events_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<div id="clashvibes_content_front">
	
	<section id="clashvibes_right_column_front">
	
	<h1><?php the_title(); ?> Page</h1>
		
	<div class="results">

            <article class="events_box">
                <h1><?php echo the_title(); ?></h1>
                
                <figure class="events">
                    <img src="<?php echo esc_url( home_url( '/' ) ); ?>" alt="<?php esc_attr_e( 'sliderimage', 'raythompsonwebdev-com' ); ?>">
                    <figcaption class="event-text">
                        <p>lorem  </p>
                    </figcaption> 
                    
                </figure>
         
               <input type="submit" value="Find Event" name="event" id="event-submit-btn" />
            </article>
 	
		
	</div>


	</section><!-- end of right panel -->

</div>
	
<?php get_footer(); ?>
