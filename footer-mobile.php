<!-- insert ad below
  <img class="ad" src="http://placekitten.com/308/55" />
-->
<footer class="site-footer">
	<p><?php echo strip_tags(wp_nav_menu(array('theme_location' => 'footer-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?></p>
	<p><a class="mobile-switch" href="<?php echo get_site_url(); ?>/wp-content/themes/sonoma-index-tribune/assets/switch.php?desktop">Desktop Site</a></p>
	<p>&copy; <?php echo date(Y);?> The Sonoma Index Tribune</p>
</footer>