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
		<img src="http://placekitten.com/198/104" width="198" height="104" />
	</div>
	<div class="ad">
		<img src="http://placekitten.com/300/250" width="300" height="250" />
	</div>
	<div class="most-read">
		<h3>Most Read Stories</h3>
		<p class="nav"><span>Today</span><span>This Week</span></p>
		<ul class="today">
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
			<li><a href="#">Vestibulum auctor dapibus neque.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
		</ul>
		<ul class="this-week">
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			<li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
			<li><a href="#">Vestibulum auctor dapibus neque.</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
		</ul>
	</div>
	<div class="ad">
		<img src="http://placekitten.com/300/600" width="300" height="600" />
	</div>
	<img src="http://placekitten.com/300/112" width="300" height="112" />
</aside>