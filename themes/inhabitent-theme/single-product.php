<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="single-product-wrapper container">
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php echo '<h3>'.CFS()->get( 'product_price' ).'</h3>'; ?>
					<?php echo CFS()->get( 'product_information' ); ?>
					
					<?php the_content(); ?>
					
					<button type="button" class="btn btn-black"><i class="fa fa-facebook"></i>Like</button>
					<button type="button" class="btn btn-black"><i class="fa fa-twitter"></i>Tweet</button>
					<button type="button" class="btn btn-black"><i class="fa fa-pinterest"></i>Pin</button>
		
				</div><!-- .entry-content -->
			</article><!-- #post-## -->			
		<?php endwhile; // End of the loop. ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>