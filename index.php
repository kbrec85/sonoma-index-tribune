<?php
/**
 * The main template file
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 get_header(); ?>
<section class="col-1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "single" ); ?>
	<?php endwhile; endif;?>
</section>

<?php get_sidebar();
get_footer(); ?>