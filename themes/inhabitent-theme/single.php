<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >
	
			<div class="journal-home-wrapper container">
				<div class="journal-box">

					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php get_template_part( 'template-parts/content', 'single' ); ?>
						
						
						<button type="button" class="btn btn-black"><i class="fa fa-facebook"></i>Like</button>
						<button type="button" class="btn btn-black"><i class="fa fa-twitter"></i>Tweet</button>
						<button type="button" class="btn btn-black"><i class="fa fa-pinterest"></i>Pin</button>
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
