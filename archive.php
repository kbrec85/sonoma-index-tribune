<?php
/**
 * Archive Template
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
 	include($tempdir.'/archive-mobile.php');
 	include($tempdir.'/footer-mobile.php');
 } else {
 	get_header();
 ?>
<section class="col-1">
	<h1 class="archive-title"><?php if(is_author()){
			$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
			echo $curauth->display_name."'s Articles";
			} else { printf( __( '%s', 'sit' ), single_cat_title( '', false ));} ?>
	    <?php 
	    $curCat = single_cat_title('',false);
      $curCatID = get_cat_ID($curCat);
      $subCats = get_categories('parent='.$curCatID);
      if($subCats){ ?>
        <span class="sub-cats">
          Related:&nbsp;
        <?php
        $count = count($subCats);
        $i = 0;
        foreach($subCats as $subs){ 
          $i++;
          ?>          
          <a href="<?php echo get_category_link($subs->term_id); ?>"><?php echo $subs->name; ?></a>         
      <?php   
          if($i != $count) echo '|';
       }// end for ?>
        </span>
      <?php } //end if subCats    
      ?>
	</h1>
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
	
	<div class="sections">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if(get_the_ID() != $featID):
			get_template_part( "content", "archive" );
		endif; endwhile; else : ?>
	<p><?php _e('There are no articles yet for this category.'); ?></p>
	<?php endif;?>
		<?php if($wp_query->max_num_pages > 10){?><h4 class="archive-link"><?php echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages )); ?></h4><?php } ?>
	</div>
		<div class="local-events-widget">
			<?php if ( dynamic_sidebar('local-events') ) : else : endif;	?>
		</div>
</section>
<?php get_sidebar();
get_footer();} ?>