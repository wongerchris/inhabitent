	<?php
/**
 * Template part for front page.  This is displaying the adventures section of the front page.
 *
 * @package RED_Starter_Theme
 */

?>

<!-- <?php
    $loop = new WP_Query( array( 'post_type' => 'adventure','posts_per_page' => 1, 'order' =>'ASC' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="pindex">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="pimage">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php } ?>
                <div class="ptitle">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        <?php endwhile;
        
    endif;
    wp_reset_postdata();
?> -->


<section class="adventure-stuff container-flex-adventure container">
				<h2>Latest Adventures</h2>

				<div class="adventure-stuff-container ">

					<div class="adventure-big">
					<?php
						global $post;
						$args = array('post_type' => 'adventure', 'posts_per_page' => 1,'order' =>'ASC');
						$myposts = get_posts( $args );
				
						

					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<?php 
						    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' ); 
						?>
	
						<div class="adventure-stuff-box  adventure-main" style="background-image:url(<?php echo $src[0]; ?>)">
								<div class="adventure-info">
								
									<h3><?php the_title(); ?></h3>
									<a href="<?php the_permalink() ?>" class="btn btn-white">Read More</a>
								</div>	
						</div>
						<?php endforeach;wp_reset_postdata(); ?>

					</div>


					<div class="adventure-small">
						<?php
						global $post;
						$args = array('post_type' => 'adventure', 'posts_per_page' => 3,'order' =>'ASC','offset' => 1);
						$myposts = get_posts( $args );
			
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<?php 
						    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' ); 
						?>
						<div class="adventure-stuff-box adventure-2" style="background-image:url(<?php echo $src[0]; ?>)">
								<div class="adventure-info">
									<h3><?php the_title(); ?></h3>
									<a href="<?php the_permalink() ?>" class="btn btn-white">Read More</a>
								</div>
						</div>
						<?php endforeach;wp_reset_postdata(); ?>
						
					</div>
				</div>
				<div class="btn-wrapper">
					<a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="btn adventure-btn">More Adventures</a>
				</div>
</section>