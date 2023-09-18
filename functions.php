<?php

/**
 * *PHP version 8.0
 *
 * Clashvibes functions and definitions *
 *
 * @category   Functions
 * @package    Clashvibes
 * @subpackage Functions_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template.
 */

/**
 * Returns a custom login error message.
 *
 * @return string.
 */
function Clashvibes_Error_message()
{
    return 'Well, that was not it, try again!';
}
add_filter('login_errors', 'Clashvibes_Error_message');


if (!function_exists('Clashvibes_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @return void.
     */
    function Clashvibes_setup()
    {
        load_theme_textdomain('clashvibes', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Add block editor styles.
        $font_url = '//https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap';
        add_editor_style(array('css/editor-style.css', str_replace(',', '%2C', $font_url)));
        add_theme_support('editor-styles');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        // Create new image sizes.
        add_image_size('featured-image', 1200, 625);
        add_image_size('blog-thumbnail', 1000, 625);
        add_image_size('audio-thumbnail', 800, 525);
        add_image_size('post-thumbnail', 160, 160, true);
        add_image_size('popular-image', 60, 60, true); // front page popular video & audio images.
        add_image_size('event-image', 100, 70, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
            'main'       => esc_html__('main', 'clashvibes'),
            'Secondary'  => esc_html__('secondary', 'clashvibes'),
            'Mobile'     => esc_html__('mobile', 'clashvibes'),
            'Audio-Nav'  => esc_html__('audio-nav', 'clashvibes'),
            'Video-Nav'  => esc_html__('video-nav', 'clashvibes'),
            'Events-Nav' => esc_html__('events-nav', 'clashvibes'),
            )
        );

        add_theme_support(
            'html5',
            array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            )
        );

        add_theme_support(
            'post-formats',
            array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            )
        );

        // Add theme support for custom Header.
        $defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
        );
        add_theme_support('custom-header', $defaults);

        // Add theme support for custom background.
        $defaults = array(
        'default-color'          => 'e9ad29',
        'default-image'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        );
        add_theme_support('custom-background', $defaults);

        // Add theme support for nav-menus.
        $args = array(
        'default-image'          => '',
        'default-color'          => 'ffffff',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',

        );
        add_theme_support('nav-menus', $args);

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'clashvibes_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'custom-logo',
            array(
            'height'      => 90,
            'width'       => 90,
            'flex-width'  => true,
            'flex-height' => true,
            )
        );
        // Enable block editor styles to match the front end.
        add_theme_support('wp-block-styles');

        // Enable wide alignments in block editor.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Remove feed icon link from legacy RSS widget.
        add_filter('rss_widget_feed_link', '__return_false');
    }

endif;
add_action('after_setup_theme', 'Clashvibes_setup');

add_filter('the_generator', '__return_empty_string');

if (function_exists('register_block_style')) {
    register_block_style(
        'core/quote',
        array(
        'name'         => 'blue-quote',
        'label'        => __('Blue Quote', 'clashvibes'),
        'is_default'   => true,
        'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
        )
    );
}

/**
 * Loads dashicons.
 *
 * @return void
 */
function Clashvibes_Load_Dashicons_Front_end()
{
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'Clashvibes_Load_Dashicons_Front_end');

/**
 * Remove version from scripts and styles.
 *
 * @param string $src script style link. *
 */
function Clashvibes_Remove_Version_Scripts_styles($src)
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'Clashvibes_Remove_Version_Scripts_styles', 9999);
add_filter('script_loader_src', 'Clashvibes_Remove_Version_Scripts_styles', 9999);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 * @return void.
 */
function Clashvibes_Content_width()
{
    $GLOBALS['content_width'] = apply_filters('Clashvibes_Content_width', 1200);
}
add_action('after_setup_theme', 'Clashvibes_Content_width', 0);

/**
 * Register widget area.
 *
 * @link   https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @return void.
 */
function Clashvibes_Widgets_init()
{
    register_sidebar(
        array(
        'name'          => __('Primary Sidebar', 'clashvibes'),
        'id'            => 'primary-widget-area',
        'description'   => __('The primary widget area', 'clashvibes'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'Clashvibes_Widgets_init');

/**
 * Events category pages navigation.
 *
 * @return void.
 */
function Clashvibes_Events_Widgets_init()
{
    register_sidebar(
        array(
        'name'          => __('Events-Nav', 'clashvibes'),
        'id'            => 'Events-Nav',
        'description'   => __('Events Side bar', 'clashvibes'),
        'before_widget' => '<div class="clashvibes_left_column_box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'Clashvibes_Events_Widgets_init');

/**
 * Audio category pages navigation.
 *
 * @return void.
 */
function Clashvibes_Audio_Widgets_init()
{
    register_sidebar(
        array(
        'name'          => __('Audio-Nav', 'clashvibes'),
        'id'            => 'Audio-Nav',
        'description'   => __('Audio Side bar', 'clashvibes'),
        'before_widget' => '<section class="clashvibes_left_column_box">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'Clashvibes_Audio_Widgets_init');

/**
 * Video category pages navigation.
 *
 * @return void.
 */
function Clashvibes_Video_Widgets_init()
{
    register_sidebar(
        array(
        'name'          => __('Video-Nav', 'clashvibes'),
        'id'            => 'Video-Nav',
        'description'   => __('Video Side bar', 'clashvibes'),
        'before_widget' => '<div class="clashvibes_left_column_box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'Clashvibes_Video_Widgets_init');

/**
 * Block Editor Fonts.
 *
 * @return void.
 */
function Clashvibes_Block_Editor_fonts()
{
    wp_enqueue_style('clashvibes-block-editor-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap', array(), wp_get_theme()->get('Version'));
}
add_action('enqueue_block_editor_assets', 'Clashvibes_Block_Editor_fonts');

/**
 * Block Editor Styling.
 *
 * @return void.
 */
function Clashvibes_Add_Block_style()
{
    wp_enqueue_script('clashvibes-block-variations', get_template_directory_uri() . '/assets/js/custom-block-settings.js', array('wp-blocks'), wp_get_theme()->get('Version'), array('strategy'  => 'defer',));
}
add_action('enqueue_block_editor_assets', 'Clashvibes_Add_Block_style');

/**
 * Enqueue scripts and styles.
 *
 * @return void.
 */
function Clashvibes_scripts()
{
    wp_enqueue_style('clashvibes-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_style_add_data('clashvibes-style', 'rtl', 'replace');
    wp_enqueue_style('clashvibes-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap', array(), wp_get_theme()->get('Version'));

    // mobile main menu script for side nav.
    if (!is_front_page() || is_category() || is_home()) {
        wp_enqueue_script('sidenav', get_template_directory_uri() . '/assets/js/mobile-sidenav-es6.js', array(), wp_get_theme()->get('Version'), array('strategy'  => 'defer',));
    }

    // mobile main menu script for mobile menu.
    wp_enqueue_script('main-mobile', get_template_directory_uri() . '/assets/js/mobile-mainnav-es6.js', array(), wp_get_theme()->get('Version'), array('strategy'  => 'defer',));

    // mobile main menu script for built in mobile menu.
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get('Version'), array('strategy'  => 'defer',));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'Clashvibes_scripts');

/**
 * Set up the WordPress core custom header feature.
 *
 * @return void.
 */
function Clashvibes_Custom_Header_setup()
{
    add_theme_support(
        'custom-header',
        apply_filters(
            'clashvibes_custom_header_args',
            array(
                'default-image'      => '',
                'default-text-color' => '000000',
                'width'              => 1000,
                'height'             => 250,
                'flex-height'        => true,
                'flex-height'        => true,
                'wp-head-callback'   => 'Clashvibes_header_style',
            )
        )
    );
}
add_action('after_setup_theme', 'Clashvibes_Custom_Header_setup');

if (!function_exists('Clashvibes_Header_style')) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see    Clashvibes_custom_header_setup().
     * @return void.
     */
    function Clashvibes_Header_style()
    {
        $header_text_color = get_header_textcolor();

        /*
        * If no custom options for text are set, let's bail.
        * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
        */
        if (get_theme_support('custom-header', 'default-text-color') === $header_text_color) {
            return;
        }

        // If we get this far, we have custom styles. Let's do this.
        ?>
        <style type="text/css">
        <?php
        // Has the text been hidden?
        if (!display_header_text()) {
            ?>.site-title,
            .site-description {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
            }

            <?php
        } else {
            ?>.site-title a,
            .site-description {
                color: <?php echo esc_attr($header_text_color); ?>;
            }

        <?php }; ?>
        </style>
        <?php
    }
endif;


require get_template_directory() . '/inc/block-pattern.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
