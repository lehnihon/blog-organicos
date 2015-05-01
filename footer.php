<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package base
 */
?>

</div><!-- #content -->
	</div><!-- wide contenitor-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="widget-footer container">
			<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lousa.jpg"; ?>" />
		</div>
		<div class="site-info">
			teste
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>