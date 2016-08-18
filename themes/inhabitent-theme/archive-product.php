<?php
/**
 * The template for displaying all product entries.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		
		<header class="shop-nav container">
		<h2>Shop Stuff</h2>
			
		<ul>

			<?php
					$args = array('taxonomy' => 'product-type', 'hide_empty' => true,'order' =>'ASC', 'orderby' =>'name');
					$myterms = get_terms( $args );
			
					foreach( $myterms as $term ) : ?>
						<li>
							<a href="<?php echo get_category_link( $term )?>" class="shop-terms"><?php echo $term ->slug?></a>
						</li>
				<?php endforeach; ?>
			</ul>
		</header>

		<section class="shop-wrapper container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'shop' ); ?>
			
		<?php endwhile; // End of the loop. ?>
		
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
