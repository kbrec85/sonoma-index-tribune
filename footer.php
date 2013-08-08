<?php
/**
 * The template for displaying the footer.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>

<img src="http://placekitten.com/728/90" width="728" height="90" class="footer-ad" />
<footer class="site-footer">
	<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/the-sonoma-index-tribune.jpg" width="357" height="31" />
	<div class="col">
		<h3>Find it Fast</h3>
		<nav>
			<?php wp_nav_menu(array('theme_location' => 'find-it-fast', 'container' => false, 'depth' => 0) ); ?>
		</nav>
	</div>
	<div class="col">
		<nav>
			<ul>
				<li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
				<li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
				<li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
				<li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent</a></li>
				<li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
				<li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
				<li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
				<li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
				<li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent</a></li>
				<li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
			</ul>
		</nav>
	</div>s
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
</body>
</html>