<?php
/**
 * Template part for displaying single shop post.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="shop-image-box">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
		<?php endif; ?>

		
		</div>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<h2><?php echo CFS()->get( 'product_price' );?></h2>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
