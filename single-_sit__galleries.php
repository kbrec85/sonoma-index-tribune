<?php
/**
 * Gallery Page template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 get_header(); ?>
<section class="col-1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<div class="full-slider">
			<a class="full-swipe-nav full-nav-left"><img src="http://img.pressdemocrat.com/arrows/left-arrow.png"></a>
			<div class="full-swiper-container"><div class="pagination"></div><div class="swiper-wrapper">
				<?php 
					$attachments = get_posts(array('post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID));
					foreach($attachments as $attachment){
							$src = wp_get_attachment_image_src($attachment->ID);
							$alt = get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true );
							if(!$alt){$alt=get_the_title();}
							$caption = $attachment->post_excerpt;
					?>
						<div class="swiper-slide">
							<?php echo '<img src="'.$src[0].'" alt="'.$alt.'" />';
							echo '<p>'.$caption.'</p>';?>
						</div>
					<?php } ?>
			</div></div>
			<a class="full-swipe-nav full-nav-right"><img src="http://img.pressdemocrat.com/arrows/right-arrow.png"></a>
		</div>
	<?php endwhile; endif;?>
	<?php comments_template( '', true ); ?>
</section>

<?php get_sidebar();
get_footer(); ?>