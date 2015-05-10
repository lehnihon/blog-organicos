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
			<div class="footer-contenta">
				<ul>
					<li>HORÁRIO DE ATENDIMENTO</li>
					<li>SEGUNDA A SEXTA DAS 9H ÁS 17H.</li>
					<li>(11)3241-0818</li>
					<li>redes</li>
				<ul>
			</div>
			<div class="footer-contentb">
				<ul>
					<li>ORGÂNICOS NA PORTA</li>
					<li>SOBRE O BLOG</li>
					<li>CONHEÇA NOSSA LOJA</li>
					<li>FALE CONOSCO</li>
				<ul>			
			</div>
			<div class="footer-contentc">
				<ul>
					<li>BLOG</li>
					<li>NUTRIÇÃO ESPORTIVA</li>
					<li>ALIMENTOS ORGÂNICOS</li>
					<li>ALIMENTAÇÃO SAUDÁVEL</li>
					<li>DICAS E RECEITAS</li>
				<ul>
			</div>
			<div style="clear:both"></div>
			<img class="img-footer" src=<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer_fruta.png"; ?> />
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>