<?php
/**
 * The main template file
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 ?>

<h1><?php if(is_author()){
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
			echo $curauth->display_name."'s Articles";
			} else { printf( __( '%s', 'sit' ), single_cat_title( '', false ));} ?></h1>
<main role="main">
	<article>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	if (has_post_thumbnail()) {
		$featID = get_the_ID();
	?>
	<article class="top category">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('featured'); ?>
		<h1><?php the_title();?></h1></a>
		<?php the_excerpt();?>
	</article>
<?php
	rewind_posts();
	break;
	}
endwhile; endif;?>
	<ul class="article-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if(get_the_ID() != $featID):?>
				<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></li>
			<?php endif; endwhile; else : ?>
			<p><?php _e('There are no articles yet for this category.'); ?></p>
		<?php endif;?>
	</ul>
	<?php if($wp_query->max_num_pages > 10){?><h4 class="archive-link"><?php echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages )); ?></h4><?php } ?>
</main>