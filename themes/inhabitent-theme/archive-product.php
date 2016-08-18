<?php
/**
 * The template for displaying all product entries.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h2>Shop Stuff</h2>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'shop' ); ?>

			<?php the_post_navigation(); ?>
			<?php echo CFS()->get( 'product_price' ); ?>
			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>