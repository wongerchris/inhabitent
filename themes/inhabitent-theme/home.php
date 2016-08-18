<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<div class="journal-home-wrapper container">
				<div class="journal-box">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php get_template_part( 'template-parts/content'); ?>
						
					<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
					</div>
					<div class="widget-sidebar">
						<?php get_sidebar(); ?>
					</div>
	
			</div><!--.journal-home-wrapper  -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
