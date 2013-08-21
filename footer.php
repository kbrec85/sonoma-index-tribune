<?php
/**
 * The template for displaying the footer.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>

<!-- DONT BLAME ME FOR THE INLINE CSS!!! - SW -->
<div id="leader_pos2" class="ad footerad" style="text-align:center;padding-bottom:20px;margin:0 auto;">
      <script type="text/javascript">yld_mgr.place_ad_here("ad728x90pos2");</script>
</div>
<footer class="site-footer">
	<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/the-sonoma-index-tribune.png" width="357" height="31" />
	<div class="col">
		<h3>Find it Fast</h3>
		<nav>
			<?php wp_nav_menu(array('theme_location' => 'find-it-fast', 'container' => false, 'depth' => 0) ); ?>
		</nav>
	</div>
	<div class="col">
	  <h3>Stay Connected</h3>
    <nav>
      <ul class="stay-connected">
        <li>
          <a href="http://www.facebook.com/#!/pages/Sonoma-Index-Tribune/359127235040" aria-hidden="true" data-icon="f" target="_blank"></a>
        </li>
        <li>
          <a href="http://twitter.com/#!/sonomanews" aria-hidden="true" data-icon="t" target="_blank"></a>
        </li>
        <li>
          <a href="http://www.youtube.com/user/sonomanewsvideo" aria-hidden="true" data-icon="y" target="_blank"></a>
        </li>
        <li>
          <a href="http://www.verican.us/cod6/subscribe.do?catalog=sonoma&edit=true" aria-hidden="true" data-icon="m" target="_blank"></a>
        </li>
      </ul>
    </nav>
	</div>
	<div class="col">
		<h3>Contact &amp; Help</h3>
		<nav>
			<?php wp_nav_menu(array('theme_location' => 'contact-help', 'container' => false, 'depth' => 0) ); ?>
		</nav>
	</div>
	<div class="col">
		<h3>Subscribers</h3>
		<nav>
			<?php wp_nav_menu(array('theme_location' => 'subscribers', 'container' => false, 'depth' => 0) ); ?>
		</nav>
	</div>
</footer>
<p class="footer-copyright">copyright <?php echo date(Y);?> The Sonoma Index Tribune | <?php echo strip_tags(wp_nav_menu(array('theme_location' => 'footer-menu', 'items_wrap' => '%3$s', 'container' => '','echo' => false, 'depth' => 0) ), '<a>'); ?></p>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39519010-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>