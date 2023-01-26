<?php

function clashvibes_plugin_register_block_patterns()
{
	if (class_exists('WP_Block_Patterns_Registry')) {

		$events = '<!-- wp:columns {"style":{"color":{"gradient":"radial-gradient(rgb(255,105,0) 0%,rgb(207,46,46) 100%)"}},"textColor":"white","fontSize":"medium"} -->
    <div class="wp-block-columns has-white-color has-text-color has-background has-medium-font-size" style="background:radial-gradient(rgb(255,105,0) 0%,rgb(207,46,46) 100%)"><!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":2562,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="" alt="" class="wp-image-2562"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
    <h2>Event</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>David Rodigan v Killamanjaro</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2>Location</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>London</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2>Date</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>12th December 2030</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2>Details</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Find tickets</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->';

		register_block_pattern_category(
			'event-page-block-pattern',
			array(
				'label' => __('Single Event Page Pattern', 'clashvibes'),
			)
		);

		register_block_pattern(
			'clashvibes/events-page-pattern',
			array(
				'title'       => __('Single Event Pattern', 'clashvibes'),
				'description' => _x('Columns for making lists with event details. ', 'Block pattern description', 'clashvibes'),
				'keywords'    => array('events', 'event location', 'events details , event date'),
				'content'     => $events,
				'categories'  => array('events-page-block-pattern'),
			)
		);
	}
}
add_action('init', 'clashvibes_plugin_register_block_patterns');
