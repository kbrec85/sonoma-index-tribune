<?php
/**
 * The main template file
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
	<div id="taboola-autosized-generated-2r"></div>
  <script type="text/javascript">
  window._taboola = window._taboola || [];
  window._taboola.push({mode: "autosized-generated-2r", container: "taboola-autosized-generated-2r", placement: "Bottom Main Column"});
  </script>
  <script>
     function outbrain(){
        var OB_permalink = 'http://' + document.location.hostname + document.location.pathname,
            OB_langJS = 'http://widgets.outbrain.com/lang_en.js',
            OB_Template = "nytrmg",
            OB_Script;
        OB_widgetId = 'AR_1';
        if (typeof (OB_Script) !== 'undefined') {
            OutbrainStart();
        } else {
            OB_Script = true;
            OB_Str = "<div id='ob_widget'><script src='http://widgets.outbrain.com/outbrainWidget.js' type='text/javascript'></" + "script></div>";
                document.write(OB_Str);
            } 
    }
    outbrain();
  </script>
</section>

<?php get_sidebar();
get_footer();} ?>