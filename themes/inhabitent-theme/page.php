<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<div class="page-wrapper container">
			<div class="page-box">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>
			<div class="widget-sidebar">
				<?php get_sidebar(); ?>
			</div>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
