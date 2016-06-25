<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


	<!--[if IE]>
<link href="css/ie6.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<!--[if IE]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->


<?php wp_head(); ?>
</head>
<body >

<div id="container">

	<header>
    	<section id="clashvibes_title">
        <?php $logo= get_option('clashvibes_logo', IMAGES.'/logo-1.png'); ?>
            <img src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" />
        </section>
        
        
    </header>
	
	
 <nav>
     	<ul>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>         
        </ul>  
</nav>
<?php if(!is_front_page()) : ?> <?php endif; ?>
