<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" >


		<?php if ( have_posts() ) : ?>

			<div class="search-home-wrapper container">
			<div class="search-box">
			<div class="title-category">
			<header class="page-header">
				<h2 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->
			</div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		<div class="widget-sidebar">
			<?php get_sidebar(); ?>
		</div>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
