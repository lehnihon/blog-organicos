<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package base
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="mainContentOfPage">
    <?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  	the_post_thumbnail('full', array('itemprop' => 'image'));}
	?>
    	<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'base' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
