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
			PUBLICIDADE
		</aside>
		
		<aside id="archives" class="widget">
			<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter_header.png"; ?>"/>
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
		</aside>
		<aside id="archives" class="widget">
			<ul>
				<div class="fb-like" data-href="https://www.facebook.com/organicosnaporta" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
			</ul>
		</aside>		


</div><!-- #secondary -->