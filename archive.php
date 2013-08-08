<?php
/**
 * Archive Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
get_header(); ?>
<section class="col-1">
	<h1 class="archive-title"><?php printf( __( '%s', 'sit' ), single_cat_title( '', false )); ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	if (has_post_thumbnail()) {
		$featID = get_the_ID();
	?>
	<article class="top">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('large'); ?>
		<h1><?php the_title();?></h1></a>
		<?php the_excerpt();?>
	</article>
<?php
	rewind_posts();
	break;
	}
endwhile; endif;?>
	
	<div class="sections">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if(get_the_ID() != $featID):
			get_template_part( "content", "archive" );
		endif; endwhile; else : ?>
	<p><?php _e('There are no articles yet for this category.'); ?></p>
	<?php endif;?>
		<h4 class="archive-link"><a href="#">Archive >></a></h4>
	</div>
		<div class="local-events-widget">
			<img src="http://placekitten.com/223/641" width="223" height="641" />
		</div>
</section>
<?php get_sidebar();
get_footer(); ?>