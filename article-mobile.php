<?php
/**
 * The main mobile template file
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<main role="main">
	<article itemscope itemtype="http://schema.org/NewsArticle">
		<header>
			<h1 itemprop="headline"><?php the_title();?></h1>
			<?php if(has_post_thumbnail()){
				$thumb = get_post_thumbnail_id();
				$caption = get_post( $thumb )->post_excerpt;?>
			<div class="caption">
				<div itemprop="thumbnailUrl"><?php the_post_thumbnail('featured');?></div>
				<p><?php echo $caption ?></p>
			</div>
			<?php }?>
			<time itemprop="dateCreated"><?php the_date('l, F j, Y g:i A');?></time>
			<h4>By 
			<?php if($cust_author){ echo $cust_author; } else {?><a rel="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php if(get_the_author_meta( 'first_name' )){ ?><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); } else {the_author_meta( 'nickname' );} ?></a><?php } if($cust_byline){ echo $cust_byline; } else { echo ', Sonoma Index Tribune';}?></h4>
		</header>
		<div itemprop="articleBody"><?php the_content(); ?></div>
		<div class="share">
			Share: 
			<a href="https://facebook.com/sharer.php?s=100&p[url]=<?php echo $the_uri;?>&p[title]=<?php echo $title_link;?>&p[images][0]=<?php echo $feat_uri;?>&p[summary]=<?php echo $desc;?>" aria-hidden="true" data-icon="f" target="_blank"></a>
			<a href="https://twitter.com/intent/tweet?text=<?php echo $title_link;?>&url=<?php echo $the_uri;?>&via=sonomanews>" aria-hidden="true" data-icon="t" target="_blank"></a>
			<a href="https://plus.google.com/share?url=<?php echo $the_uri;?>" aria-hidden="true" data-icon="g" target="_blank"></a>
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo $the_uri;?>&media=<?php echo $feat_uri;?>&description=<?php echo $title_link;?>" aria-hidden="true" data-icon="p" target="_blank"></a>
			<a href="mailto:someone@example.com&subject=<?php echo $title_link;?>&body=Check%20out%20this%20article%20I%20just%20read%20on%20sonomanews.com:%20<?php echo $the_uri;?>" aria-hidden="true" data-icon="m"></a>
		</div>
	</article>
</main>
<?php endwhile; endif; ?>