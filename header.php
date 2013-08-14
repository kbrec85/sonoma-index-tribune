<?php
/**
 * The template for displaying the header.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 ?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head();?>
</head>
<body>
<div class="wrapper">
<header role="banner">
	<div class="ad">
		<img src="http://placekitten.com/728/90" width="728" height="90" />
	</div>
	<nav class="top-nav">
		<?php echo strip_tags(wp_nav_menu(array('theme_location' => 'top-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?>
	</nav>
	<img class="magcover" src="http://placekitten.com/92/124" width="92" height="124" />
	<a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/the-sonoma-index-tribune.jpg" width="900" height="75" /></a>
	<nav role="navigation">
		<?php echo strip_tags(wp_nav_menu(array('theme_location' => 'main-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?>
	</nav>
</header>