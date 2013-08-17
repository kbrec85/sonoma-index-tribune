<?php
/**
 * The template for displaying the footer.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>
<aside class="col-2">
	<time><?php echo date('j, F, Y g:i A');?></time>
	<form role="search" action="/" method="get">
		<input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
	</form>
	<div class="weather">
		<?php if ( dynamic_sidebar('sidebar-top') ) : else : endif;	?>
	</div>
	<div class="ad">
		<script>yld_mgr.place_ad_here("ad300x250pos1");</script>
	</div>
	<div class="most-read">
		<h3>Most Read Stories</h3>
		<p class="nav"><span class="active today">Today</span><span class="week">This Week</span></p>
		<?php if ( dynamic_sidebar('popular-posts') ) : else : endif;	?>
	</div>
	<div class="ad">
		<script>yld_mgr.place_ad_here("ad300x600pos1");</script>
	</div>
	<img src="http://placekitten.com/300/112" width="300" height="112" />
</aside>