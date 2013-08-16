<?php
/**
 * The main template file
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 $tempdir = get_template_directory();
 require_once ($tempdir.'/includes/mobile_detect.php');
 $browser = new Mobile_Detect();
 if($browser->isMobile()){
 	include($tempdir.'/header_mobile.php');
 	include($tempdir.'/article-mobile.php');
 	include($tempdir.'/footer-mobile.php');
 } else {
 	get_header();
 ?>
<section class="col-1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( "content", "single" ); ?>
	<?php endwhile; endif;?>
	<?php comments_template( '', true ); ?>
</section>

<?php get_sidebar();
get_footer();} ?>