<?php
/**
 * Main Content Template
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
$title_link = str_replace(' ', '%20', get_the_title());
$the_uri = get_permalink();
$feat_uri = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$exc = get_the_excerpt();
$exc2 = substr($exc, 0, 50);
$desc = str_replace(' ', '%20', $exc2);
$cust_author = get_post_meta( get_the_ID(), '_sit__author_overwrite', true );
$cust_byline = get_post_meta( get_the_ID(), '_sit__byline', true );
?>
	<article class="top" itemscope itemtype="http://schema.org/NewsArticle">
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
			<?php if(!$cust_author){?><div class="authorpic"><?php userphoto_the_author_photo(); ?></div><?php } ?>
			<time itemprop="dateCreated"><?php the_date('l, F j, Y g:i A');?></time>
			<h4>By 
			<?php if($cust_author){ echo $cust_author; } else {?><a rel="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a><?php } if($cust_byline){ echo $cust_byline; }?></h4>
			<div class="share">
					Share: 
					<a href="https://facebook.com/sharer.php?s=100&p[url]=<?php echo $the_uri;?>&p[title]=<?php echo $title_link;?>&p[images][0]=<?php echo $feat_uri;?>&p[summary]=<?php echo $desc;?>" aria-hidden="true" data-icon="f" target="_blank"></a>
					<a href="https://twitter.com/intent/tweet?text=<?php echo $title_link;?>&url=<?php echo $the_uri;?>&via=sonomanews>" aria-hidden="true" data-icon="t" target="_blank"></a>
					<a href="https://plus.google.com/share?url=<?php echo $the_uri;?>" aria-hidden="true" data-icon="g" target="_blank"></a>
					<a href="http://pinterest.com/pin/create/button/?url=<?php echo $the_uri;?>&media=<?php echo $feat_uri;?>&description=<?php echo $title_link;?>" aria-hidden="true" data-icon="p" target="_blank"></a>
					<a href="mailto:someone@example.com&subject=<?php echo $title_link;?>&body=Check%20out%20this%20article%20I%20just%20read%20on%20sonomanews.com:%20<?php echo $the_uri;?>" aria-hidden="true" data-icon="m"></a>
					<a href="#" aria-hidden="true" data-icon="P"></a>
				</div>
		</header>
		<div itemprop="articleBody"><?php the_content(); ?></div>
		<div class="share">
			Share: 
			<a href="https://facebook.com/sharer.php?s=100&p[url]=<?php echo $the_uri;?>&p[title]=<?php echo $title_link;?>&p[images][0]=<?php echo $feat_uri;?>&p[summary]=<?php echo $desc;?>" aria-hidden="true" data-icon="f" target="_blank"></a>
			<a href="https://twitter.com/intent/tweet?text=<?php echo $title_link;?>&url=<?php echo $the_uri;?>&via=sonomanews>" aria-hidden="true" data-icon="t" target="_blank"></a>
			<a href="https://plus.google.com/share?url=<?php echo $the_uri;?>" aria-hidden="true" data-icon="g" target="_blank"></a>
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo $the_uri;?>&media=<?php echo $feat_uri;?>&description=<?php echo $title_link;?>" aria-hidden="true" data-icon="p" target="_blank"></a>
			<a href="mailto:someone@example.com&subject=<?php echo $title_link;?>&body=Check%20out%20this%20article%20I%20just%20read%20on%20sonomanews.com:%20<?php echo $the_uri;?>" aria-hidden="true" data-icon="m"></a>
			<a href="#" aria-hidden="true" data-icon="P"></a>
		</div>
	</article>