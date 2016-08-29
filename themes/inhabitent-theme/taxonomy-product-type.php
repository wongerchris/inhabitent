<?php
/**
 * The template for displaying all product entries.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<header class="shop-nav container">
			<?php 
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
					echo '<h2>'.$term->name.'</h2>'; 
					echo '<p class="term-description">'.$term ->description.'</p>'
			?>

		</header>

		<section class="shop-wrapper container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'shop' ); ?>
			
		<?php endwhile; // End of the loop. ?>
		
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
