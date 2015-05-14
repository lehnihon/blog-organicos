<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package base
 */
?>
<div id="secondary" class="widget-area four columns" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
		<aside id="archives" class="widget">
			<?php echo do_shortcode("[metaslider id=34]"); ?>
		</aside>
		
		<aside id="archives" class="widget">
			<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter_header.png"; ?>"/>
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
		</aside>
		<aside id="archives" class="widget">
			<ul>
				<div class="fb-like-box" data-href="https://www.facebook.com/organicosnaporta" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
			</ul>
		</aside>		


</div><!-- #secondary -->