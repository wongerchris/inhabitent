<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="journal-home-wrapper container">
				<div class="journal-box">

					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php get_template_part( 'template-parts/content', 'single' ); ?>
						
						<?php the_post_navigation(); ?>
						
						<?php
				
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>
				
				</div>
				
				<div class="widget-sidebar">
					<?php get_sidebar(); ?>
				</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
