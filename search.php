<?php
/**
 * Search Results Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 get_header(); ?>
<section class="col-1">
	<div class="sections">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "search" ); ?>
	<?php endwhile; endif;?>
	</div>
	<div class="local-events-widget">
		<?php if ( dynamic_sidebar('local-events') ) : else : endif;	?>
	</div>
</section>

<?php get_sidebar();
get_footer(); ?>