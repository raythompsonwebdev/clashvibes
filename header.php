<!doctype html>
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");} ?>

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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body >

<div id="container">

	<header>
    	<section id="clashvibes_title">
        <?php $logo= get_option('clashvibes_logo', IMAGES.'/Clashvibes-version-2-database-page_03.gif'); ?>
            <img src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" />
        </section>

            <span id="socialmediatop">
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-instagram"></i></span></a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-twitter"></i></span></a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-facebook"></i></span></a>
                <a class="social-icon linkedin-icon" href="" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-google"></i></span></a>
            </span>
    </header>


 <nav>
     	<ul>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
        </ul>
</nav>
<?php if(!is_front_page()) : ?> <?php endif; ?>
