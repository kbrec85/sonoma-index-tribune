<?php
/**
 * The template for displaying the footer.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>
<?php
  //set local date/time  - SW
  date_default_timezone_set('America/Los_Angeles');
?>
<aside class="col-2">
	<time><?php echo date('F j, Y g:i A');?></time>
<!-- Place this tag where you want the search box to render -->
<gcse:searchbox-only></gcse:searchbox-only>
	<div class="weather">
		<?php if ( dynamic_sidebar('sidebar-top') ) : else : endif;	?>
	</div>
	<div class="ad">
		<script>yld_mgr.place_ad_here("ad300x250pos1");</script>
	</div>
	<div class="most-read">
		<h3>Most Read Stories</h3>
		<!--<p class="nav"><span class="active today">Today</span><span class="week">This Week</span></p>-->
		<?php if ( dynamic_sidebar('popular-posts') ) : else : endif;	?>
	</div>
	<div class="ad">
		<script>yld_mgr.place_ad_here("ad300x600pos1");</script>
	</div>
	<div class="network-sites">
      <h4>Our Network</h4>
      <a class="pd-logo" href="http://www.pressdemocrat.com/"></a>
      <a class="p360-logo" href="http://www.petaluma360.com/"></a>
      <a class="nbbj-logo" href="http://www.northbaybusinessjournal.com/"></a>
  </div>
</aside>