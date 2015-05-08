<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package base
 */
?><!DOCTYPE html>
<html <?php base_tag_schema(); ?> <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="header-linha-verde"></div>
	<header id="masthead" class="site-header" role="banner">
		
		<div class="site-branding">    
			<div class="container branding">
				<div class="logo-organicos">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 		
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" alt="<?php echo esc_attr( bloginfo( 'name' )); ?>" class="header-image">	
					</a>
				</div>
				<div class="pesquisar-redes">
					<div class="pesquisar-organicos">
						<?php get_search_form(); ?>
					</div>
					<ul class="redes-sociais-header">
						<li class="twitter"><a target="_blank" href="https://twitter.com/organicoemcasa"></a></li>
						<li class="instagran"><a target="_blank" href="https://instagram.com/organicosnaporta"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/organicosnaporta"></a></li>
					</ul>
				</div>
			</div><!-- .container branding-->
        </div><!-- .site-branding-->
       
	</header><!-- #masthead -->
<div id="content" class="site-content container">
	<?php if (is_home()):?>
		<div class="container navmenu">
			<ul class="navmenub">
				<li><a class="font-size-p" target="_blank" href="#"><strong>SOBRE O BLOG</strong></a></li>
				<li class="navmenu-ponto"></li>
				<li><a class="font-size-p" target="_blank" href="#"><strong>CONHEÇA NOSSA LOJA</strong></a></li>
				<li class="navmenu-ponto"></li>
				<li><a class="font-size-p" target="_blank" href="#"><strong>RECEBA NOVIDADES</strong></a></li>
				<li class="navmenu-ponto"></li>
				<li><a class="font-size-p" target="_blank" href="#"><strong>FALE CONOSCO</strong></a></li>
			</ul>
			<ul class="navmenuc">
				<li><a target="_blank" href="#"><strong>SOBRE O BLOG</strong></a></li>
				<li><a target="_blank" href="#"><strong>CONHEÇA NOSSA LOJA</strong></a></li>
				<li><a target="_blank" href="#"><strong>RECEBA NOVIDADES</strong></a></li>
				<li><a target="_blank" href="#"><strong>FALE CONOSCO</strong></a></li>
			</ul>
			<div style="clear:both"></div>
			<div style="padding:0 10px;">
			<?php 
				echo do_shortcode("[metaslider id=59]"); 
			?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'base' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'base' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			</div>
		</div> <!-- .container navmenu-->
		 <!--<div class="wide contenitor">-->
	 <?php endif ?>
