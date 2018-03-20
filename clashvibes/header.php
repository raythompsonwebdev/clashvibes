<!DOCTYPE html >
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE]>
<script src="/js/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
            
 <button id="toggle-nav">Menu</button>

    
<div id="container">

	<header>
    <div class="site-logo">
        <?php $site_title = get_bloginfo('name'); ?>
        <a href=" <?php echo esc_url(home_url('/')); ?>" rel="home">
            <div class="screen-reader-text">
                <?php printf(esc_html__('Go to the home page of %1$s', 'clashvibes'), $site_title); ?>
            </div>
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <div class="site-firstletter" aria-hidden="true">
                    <?php echo substr($site_title, 0, 1); ?>
                </div>
            <?php } ?>
        </a>
    </div>
    	<section id="clashvibes_title">
            
            <h1>Clashvibes</h1>
            <?php $description = get_bloginfo('description', 'display');

            if ($description || is_customize_preview()) :
                ?>

                <h2 class="site-description"><?php echo $description; ?></h2>
    
        <?php endif; ?>
        </section>

        <span id="socialmediatop"> 
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn">
                    <span>
                        <i class="fa fa-instagram"></i>
                    </span>
                </a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn">
                    <span>
                        <i class="fa fa-twitter"></i>
                    </span>
                </a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn">
                    <span>
                        <i class="fa fa-facebook"></i>
                    </span>
                </a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn">
                    <span>
                        <i class="fa fa-google"></i>
                    </span>
                </a>
            </span>
    </header>


 <nav>
     	<ul>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
        </ul>
</nav>
<?php if(!is_front_page()) : ?>

    <button id="side-bar-btn">SideBar</button>

    <?php else : ?>

    <button id="side-bar-btn" style="display:none">SideBar</button>

    
     <?php endif; ?>