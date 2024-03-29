<?php

/**
 * *PHP version 8.0
 *
 * Search News | core/searchform-news.php.
 *
 * @category   Search_Form_News
 * @package    Clashvibes
 * @subpackage Search_Form_News
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
        <label>
            <span class="screen-reader-text">
                <?php esc_html_e('Search', 'clashvibes'); ?>
            </span>
            <input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr__('Search', 'clashvibes'); ?>" />
        </label>
        <input type="submit" class="search-submit" value="Find" />
    </div>
</form>
