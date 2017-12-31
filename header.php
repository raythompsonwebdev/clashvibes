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

<title><?php bloginfo('name');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<!--[if IE]>
<link href="css/ie6.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<!--[if IE]>
<script src="/js/html5.js"></script>
<![endif]-->


<?php wp_head(); ?>
</head>
<body >
    <button id="toggle-nav">Menu</button>
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

    <button id="side-bar-btn"></button>