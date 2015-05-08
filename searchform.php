<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<input type="search" class="pesquisar-input" placeholder="<?php echo esc_attr_x( 'O QUE VOCÊ ESTÁ PROCURANDO?', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<input type="image" class="pesquisar-submit" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao_pesquisar.jpg"; ?>" />
	</fieldset>
</form>