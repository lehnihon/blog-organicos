<?php
/**
 * @package base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta-home" style="<?php echo post_background_color(the_category_ID( FALSE)) ?>">
				<p class="entry-meta-content">
				<?php 
					echo post_date_format(get_the_date('d-F'));
				?>
				</p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<div style="clear:both"></div>
    </header><!-- .entry-header -->
	<div class="entry-content">
		<h1 class="entry-title">
        	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>
        </h1>            
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'base' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'base' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<ul>
			<li><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/></li>
			<li><a href="<?php the_permalink(); ?>" rel="bookmark">Veja o post completo.</a></li>
		</ul>
		<div style="clear:both"></div>
		<p>
			<?php edit_post_link( __( 'Editar post', 'base' ), '<span class="edit-link">', '</span>' ); ?>
		</p>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->