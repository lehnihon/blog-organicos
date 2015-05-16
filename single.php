<?php
/**
 * The Template for displaying all single posts.
 *
 * @package base
 */

get_header(); ?>

	<div id="primary" class="content-area twelve columns">
		<main id="main" class="site-main" role="main">
    
	<?php BaseBreadcrumb(); ?>
    
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', 'single' ); ?>

			<?php base_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>