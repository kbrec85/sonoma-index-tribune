<?php
/**
 * Front Page Mobile Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
?>

<main role="main">
	<article>
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
	</article>
	<ul class="article-list">
		<?php
				$query = new WP_Query('posts_per_page=9');
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				if (get_the_ID() != $featured_id) {
			?>
				<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></li>
			<?php } endwhile; endif; ?>
	</ul>
</main>
<img class="ad" src="http://placekitten.com/308/55" />
<section class="sections">
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
</section>