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
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head();?>
  <script type="text/javascript">
    //REQUIRED
    yld_mgr = {};
    yld_mgr.container_type="js";
    yld_mgr.request_type="ac";
    yld_mgr.pub_id="27488010960";
    yld_mgr.site_name="The Press Democrat HP RE Autos";
    yld_mgr.content_topic_id_list=["20201001"];

    //SET UP SLOTS
    yld_mgr.slots = {};
      //leaderboard 1
      yld_mgr.slots.ad728x90pos1 = {};
      yld_mgr.slots.ad728x90pos1.ad_size_list=["728x90"];
      yld_mgr.slots.ad728x90pos1.ad_delivery_mode="ipatf";
      yld_mgr.slots.ad728x90pos1.cstm_content_cat_list=[""];
      //leaderboard 2
      yld_mgr.slots.ad728x90pos2 = {};
      yld_mgr.slots.ad728x90pos2.ad_size_list = ["728x90"];
      yld_mgr.slots.ad728x90pos2.ad_delivery_mode = "ipbtf";
      yld_mgr.slots.ad728x90pos2.cstm_content_cat_list=[""];
      //freeform
      yld_mgr.slots.ad300x600pos1 = {};
      yld_mgr.slots.ad300x600pos1.ad_size_list = ["300x600"];
      yld_mgr.slots.ad300x600pos1.ad_delivery_mode = "ipbtf";
      yld_mgr.slots.ad300x600pos1.cstm_content_cat_list=[""];
      //large rectangle 1
      yld_mgr.slots.ad300x250pos1 = {};
      yld_mgr.slots.ad300x250pos1.ad_size_list = ["300x250"];
      yld_mgr.slots.ad300x250pos1.ad_delivery_mode = "ipatf";
      yld_mgr.slots.ad300x250pos1.cstm_content_cat_list=[""];
      //large rectangle 2
      yld_mgr.slots.ad300x250pos2 = {};
      yld_mgr.slots.ad300x250pos2.ad_size_list = ["300x250"];
      yld_mgr.slots.ad300x250pos2.ad_delivery_mode = "ipbtf";
      yld_mgr.slots.ad300x250pos2.cstm_content_cat_list=[""];
      //rich media 2
      yld_mgr.slots.ad1x1pos1 = {};
      yld_mgr.slots.ad1x1pos1.ad_size_list = ["1x1"];
      yld_mgr.slots.ad1x1pos1.ad_delivery_mode = "ipatf";
      yld_mgr.slots.ad1x1pos1.cstm_content_cat_list=[""];
      //beltway 1
      yld_mgr.slots.ad234x60pos1 = {};
      yld_mgr.slots.ad234x60pos1.ad_size_list = ["234x60"];
      yld_mgr.slots.ad234x60pos1.ad_delivery_mode = "ipatf";
      yld_mgr.slots.ad234x60pos1.cstm_content_cat_list=[""] ;
      //beltway 2
      yld_mgr.slots.ad234x60pos2 = {};
      yld_mgr.slots.ad234x60pos2.ad_size_list = ["234x60"];
      yld_mgr.slots.ad234x60pos2.ad_delivery_mode = "ipbtf";
      yld_mgr.slots.ad234x60pos2.cstm_content_cat_list=[""] ; 
    </script>  
    <script type="text/javascript" src="http://e.yieldmanager.net/script.js"></script>
<!-- Put the following javascript before the closing </head> tag. -->
  
<script>
  (function() {
    var cx = '013144519715863492352:oazz1fn69hy';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>
<body>
<div class="wrapper">
<header role="banner">
	<div class="ad ad-leader">
		<script>yld_mgr.place_ad_here("ad728x90pos1");</script>
	</div>
	<nav class="top-nav">
		<?php echo strip_tags(wp_nav_menu(array('theme_location' => 'top-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?>
	</nav>
	<img class="magcover" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sonoma-cover.jpg" width="92" height="117" border="0"/>
	<a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/the-sonoma-index-tribune.jpg" width="900" height="75" /></a>
	<nav role="navigation">
		<?php echo strip_tags(wp_nav_menu(array('theme_location' => 'main-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?>
	</nav>
</header>