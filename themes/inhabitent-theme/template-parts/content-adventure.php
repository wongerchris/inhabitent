<?php
/**
 * Template part for displaying single shop post.
 *
 * @package RED_Starter_Theme
 */

?>

	
		<?php if ( has_post_thumbnail() ) : ?>
		
		<?php 
	    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' ); 
		?>
		
		<div class="adventure-box-archive" style="background-image:url(<?php echo $src[0]; ?>)">
	
				<div class="adventure-title">		
					<h3><?php the_title(); ?></h3>
					<a href="<?php the_permalink() ?>" class="btn btn-white">Read More</a>
				</div>	

		</div>
		

		<?php endif; ?>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->

