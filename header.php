<?php

/**
 * *PHP version 8.0
 *
 * Header | core/header.php.
 *
 * @category   Header
 * @package    Clashvibes
 * @subpackage Header
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <span id="tog-menu">

        <?php if (is_front_page() || is_page('events') || is_page('contact') || is_page('clashaudio') || is_page('clashvideos') ) : ?>

            <button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'clashvibes'); ?></button>


        <?php else : ?>

            <button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'clashvibes'); ?></button>

            <button id="toggle-side" class="sidebar-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('SideBar', 'clashvibes'); ?></button>


        <?php endif; ?>
    </span>

    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'clashvibes'); ?></a>


        <?php if (get_header_image() ) { ?>
            <header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
        <?php } else { ?>
                <header id="masthead" class="site-header" role="banner">
        <?php } ?>

                <div class="site-branding">

                    <div class="site-logo">
                        <?php $clashvibes_site_title = get_bloginfo('name'); ?>
                        <a href=" <?php echo esc_url(home_url('/')); ?>" rel="home">
                            <div class="screen-reader-text">

                                <?php
                                /* translators: %1$s:, CMSname: WordPress. */
                                printf('Go to the home page of %1$s', 'clashvibes', esc_html($clashvibes_site_title));
                                ?>

                            </div>
                            <?php
                            if (has_custom_logo() ) :
                                the_custom_logo();
                                ?>
                            <?php else : ?>
                                <div class="site-firstletter" aria-hidden="true">
                                <?php echo esc_html(substr($clashvibes_site_title, 0, 1)); ?>
                                </div>

                            <?php endif; ?>

                        </a>
                    </div>


                    <section id="clashvibes-title">

                        <h1 class="site-title">
                            <?php esc_html_e('Clashvibes', 'clashvibes'); ?>
                        </h1>
                        <?php

                        $clashvibes_description = get_bloginfo('description', 'display');
                        if ($clashvibes_description || is_customize_preview() ) :
                            ?>

                            <p class="site-description">
                            <?php
                            echo esc_html($clashvibes_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            ?>
                            </p>

                        <?php endif; ?>

                    </section>

                </div>


                <aside id="socialmediatop">

                    <a class="social-icon instagram-icon" href="<?php echo esc_url(__('http://www.instagram.com/', 'clashvibes')); ?>" target="new" title=<?php esc_attr_e('Follow me on Instagram', 'clashvibes'); ?>>
                        <span class="dashicons dashicons-instagram"></span>
                    </a>

                    <a class="social-icon twitter-icon" href="<?php echo esc_url(__('http://twitter.com/RayThompWeb', 'clashvibes')); ?>" target="new" title=<?php esc_attr_e('Follow me on Twitter', 'clashvibes'); ?>>
                        <span class="dashicons dashicons-twitter"></span>
                    </a>

                    <a class="social-icon facebook-icon" href="<?php echo esc_url(__('https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'clashvibes')); ?>" target="new" title=<?php esc_attr_e('Follow me on Facebook', 'clashvibes'); ?>>
                        <span class="dashicons dashicons-facebook"></span>
                    </a>

                    <a class="social-icon pinterest-icon" href="<?php echo esc_url(__('https://www.pinterest.co.uk/', 'clashvibes')); ?>" target="new" title=<?php esc_attr_e('Follow me on Pinterest', 'clashvibes'); ?>>
                        <span class="dashicons dashicons-pinterest"></span>
                    </a>

                </aside>


                </header>


                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'clashvibes'); ?></button>


                <nav id="cv-mobilenav" class="mobile-navigation">

                    <?php
                    wp_nav_menu(
                        array(
                        'menu'           => 'Mobile',
                        'container'      => 'ul',
                        'fallback_cb'    => false,
                        'theme_location' => 'mobile',
                        )
                    );
                    ?>

                </nav>


                <nav id="cv-mainnav" class="main-navigation">

                    <?php
                    wp_nav_menu(
                        array(
                        'menu'           => 'Main Nav',
                        'container'      => 'ul',
                        'fallback_cb'    => false,
                        'theme_location' => 'main',
                        )
                    );
                    ?>

                </nav>

                <div class="page-content">
