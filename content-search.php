<?php
/**
 * Search results Content Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>

		<article>
			<a href="<?php the_permalink();?>"><?php if(has_post_thumbnail()){
				the_post_thumbnail('small');
			} else { ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitdefaultimg.jpg" width="103" height="78" />
			<?php } ?></a>
			<div><a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
			<?php the_excerpt(); ?></div>
		</article>
		