<?php

/**
 * *PHP version 8.1
 *
 * Taxonomy Audio 2010 | core/taxonomy-audio-category-post-2010-clashes.php.
 *
 * @category   Taxonomy_Audio_2010
 * @package    Clashvibes
 * @subpackage Taxonomy_Audio_2010
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

get_header();

$clashvibes_audioterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<?php get_sidebar( 'audio' ); ?>

<main id="primary" class="site-main">

	<?php $clashvibes_archivetitle = apply_filters( 'the_title', $clashvibes_audioterm->name ); ?>

	<h2 class="archive-title"><?php esc_html( single_tag_title( 'Audio Category : ', $clashvibes_archivetitle ) ); ?> </h2>

	<?php get_template_part( 'template-parts/content', 'custom' ); ?>

</main>

<?php get_footer(); ?>
