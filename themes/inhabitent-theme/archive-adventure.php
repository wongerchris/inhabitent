<?php
/**
 * The template for displaying all product entries.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		
		<header class="adventure-header">
			<h2>Latest Adventures</h2>	
		</header>

		<section class="container adventure-section">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'adventure' ); ?>
			
		<?php endwhile; // End of the loop. ?>
		
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>