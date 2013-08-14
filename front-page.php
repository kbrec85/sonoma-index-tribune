<?php
/**
 * Front Page Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 get_header(); ?>
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
				$query = new WP_Query('posts_per_page=9');
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
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
			<div class="swiper-slide">
				<img src="http://placekitten.com/144/108" width="144" height="108" />
				This is a caption for an image
			</div>
		</div></div>
		<a class="swipe-nav nav-right"><img src="http://img.pressdemocrat.com/arrows/right-arrow.png"></a>
	</section>
	<section>
		<div class="sections">
			<div class="box">
				<a href="#"><h3>Sports</h3></a>
				<?php $query = new WP_Query('cat=2');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php the_excerpt(); endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="#"><h3>Food &amp; Wine</h3></a>
				<?php $query = new WP_Query('cat=4');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php the_excerpt(); endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="#"><h3>Entertainment</h3></a>
				<?php $query = new WP_Query('cat=5');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php the_excerpt(); endwhile; endif; ?>
			</div><!--
			--><div class="box">
				<a href="#"><h3>Opinion</h3></a>
				<?php $query = new WP_Query('cat=8');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
				<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()){
					the_post_thumbnail('thumbnail');
					} else {
						echo '<img src="'.get_stylesheet_directory_uri().'/images/sitdefaultimg.jpg" />';
					}
				?>
				<h4><?php the_title(); ?></h4></a>
				<?php the_excerpt(); endwhile; endif; ?>
			</div>
			<h4>Headlines from around the North Bay</h4>
			<ul class="north-bay-headlines">
				<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
				<li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
				<li><a href="#">Vestibulum auctor dapibus neque.</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
			</ul>
		</div>
		<div class="local-events-widget">
			<?php if ( dynamic_sidebar('local-events') ) : else : endif;	?>
		</div>
	</section>
</section>

<?php get_sidebar();
get_footer(); ?>