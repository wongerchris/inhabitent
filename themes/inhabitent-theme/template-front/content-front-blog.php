<?php
/**
 * Template part for displaying the first three journal blogs on the front page
 *
 * @package RED_Starter_Theme
 */

?>

<section class="journal-stuff container">
	<h2>Inhabitant Journal</h2>
		<div class="journal-stuff-container">
				<?php
					// Get the last 3 posts.
					global $post;
					$args = array( 'posts_per_page' => 3 );
					$myposts = get_posts( $args );

					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="journal-stuff-box">
							<?php the_post_thumbnail(); ?>
							<div class="journal-stuff-content">
								<?php the_date();?> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>.
								<a href="<?php the_permalink() ?>" style="color:red;"rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								<a href="#" class="btn">Do Stuff</a>
							</div>
						</div>

				<?php endforeach; ?>	
		</div>	
	
</section><!-- .journal-stuff container -->