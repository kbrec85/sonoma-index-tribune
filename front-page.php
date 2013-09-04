<?php
/**
 * Front Page Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
session_start();
 $tempdir = get_template_directory();
 require_once ($tempdir.'/includes/mobile_detect.php');
 $browser = new Mobile_Detect();
 if(($browser->isMobile())&&!($browser->isTablet())&&!($_SESSION['view']=='desktop')){
    include($tempdir.'/header_mobile.php');
    include($tempdir.'/front-page-mobile.php');
    include($tempdir.'/footer-mobile.php');
 } else {
 	get_header();
 ?>
 <section class="col-1">
	<main>
		<div class="featured">
			<?php 
				$query = new WP_Query('cat=17');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				if(has_post_thumbnail()){
					$featured_id = get_the_ID();?>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				<?php the_post_thumbnail('featured'); ?>
			<h2><?php the_title();?></h2></a>
			<?php the_excerpt(); 
				break; }
				endwhile; endif;
			?>
		</div>
		<div class="top-news">
			<h4>Top news</h4>
			<ul>
			<?php
				$query = new WP_Query('cat=17&posts_per_page=9');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				if (get_the_ID() != $featured_id) {
			?>
				<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></li>
			<?php } endwhile; endif; ?>
			</ul>
		</div>
	</main>
	<section role="slider">
		<h3>Photo Galleries</h3>
		<div class="gallery-submit">
			Submit Your: <a href="#">Photos</a> | <a href="#">Videos</a>
		</div>
		<a class="swipe-nav nav-left"><img src="http://img.pressdemocrat.com/arrows/left-arrow.png"></a>
		<div class="swiper-container"><div class="pagination"></div><div class="swiper-wrapper">
			<?php $slider = new WP_Query(array('post_type' => '_sit__galleries', 'posts_per_page' => 8,));
				if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post();
			?>
				<div class="swiper-slide"><a href="<?php the_permalink();?>">
					<?php if(has_post_thumbnail()){the_post_thumbnail('thumbnail');}else{
						$attachments = get_posts(array('post_type' => 'attachment', 'numberposts' => 1, 'post_status' => null, 'post_parent' => $post->ID));
						foreach($attachments as $attachment){
							$src = wp_get_attachment_image_src($attachment->ID, 'thumbnail');
							echo '<img src="'.$src[0].'" alt="'.get_the_title().'" />';
						}
					} 
					the_title();?>
				</a></div>
			<?php endwhile; endif; ?>
		</div></div>
		<a class="swipe-nav nav-right"><img src="http://img.pressdemocrat.com/arrows/right-arrow.png"></a>
	</section>
	<section>
		<div class="sections">
			<div class="box">
				<a href="<?php echo esc_url(get_category_link( 2 )); ?>"><h3>Sports</h3></a>
				<?php $query = new WP_Query('cat=2&posts_per_page=1');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="<?php echo esc_url(get_category_link( 4 )); ?>"><h3>Food &amp; Wine</h3></a>
				<?php $query = new WP_Query('cat=4&posts_per_page=1');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="<?php echo esc_url(get_category_link( 5 )); ?>"><h3>Entertainment</h3></a>
				<?php $query = new WP_Query('cat=5&posts_per_page=1');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="<?php echo esc_url(get_category_link( 8 )); ?>"><h3>Opinion</h3></a>
				<?php $query = new WP_Query('cat=8&posts_per_page=1');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php endwhile; endif; ?>
			</div>
			<h4>Headlines from around the North Bay</h4>
			<?php if ( dynamic_sidebar('around-the-bay') ) : else : endif;	?>
		</div>
		<div class="local-events-widget">
			<?php if ( dynamic_sidebar('local-events') ) : else : endif;	?>
		</div>
	</section>
</section>

<?php get_sidebar();
get_footer(); }?>