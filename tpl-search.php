<?php
/**
 * Template Name: Search Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 get_header(); ?>
<section class="col-1">
	<div class="sections">
<!-- Place this tag where you want the search results to render -->
<gcse:searchresults-only></gcse:searchresults-only> 
	</div>
	<div class="local-events-widget">
		<?php if ( dynamic_sidebar('local-events') ) : else : endif;	?>
	</div>
</section>

<?php get_sidebar();
get_footer(); ?>