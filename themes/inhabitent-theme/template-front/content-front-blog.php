<?php
/**
 * Template part for displaying the first three journal blogs on the front page
 *
 * @package RED_Starter_Theme
 */

?>

<section class="journal-stuff container-flex">
	<h2>Inhabitant Journal</h2>
		<div class="journal-stuff-container container">
				<?php
					// Get the last 3 posts.
					global $post;
					$args = array( 'posts_per_page' => 3 );
					$myposts = get_posts( $args );

					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="journal-stuff-box">
							<?php the_post_thumbnail(); ?>
							<div class="journal-stuff-content">
								<p><?php the_date();?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
								<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								
								<a href="<?php the_permalink() ?>" class="btn btn-black">Read Entry</a>
							</div>
						</div>

				<?php endforeach;wp_reset_postdata(); ?>	
		</div>	
	
</section><!-- .journal-stuff container -->