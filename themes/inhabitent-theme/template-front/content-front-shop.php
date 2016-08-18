	<?php
/**
 * Template part for front page.  This is displaying the shop stuff section of the front page.
 *
 * @package RED_Starter_Theme
 */

?>

	<section class="shop-stuff container-flex">
				<h2>Shop Stuff</h2>
				
			<div class="shop-stuff-container container">
			

			<?php
				$args = array('taxonomy' => 'product-type', 'hide_empty' => true,'order' =>'ASC', 'orderby' =>'name');
				$myterms = get_terms( $args );
		
				foreach( $myterms as $term ) : ?>
					<div class="shop-stuff-box">
						<img class="shop-stuff-icon"src="<?php echo(get_template_directory_uri());?>/images/<?php echo $term->slug?>.svg" alt="shop icon" border="0"/>
						<p><?php echo term_description( $term) ?></p>
						<a href="<?php echo get_category_link( $term )?>" class="btn"><?php echo $term ->slug?> Stuff</a>
					</div>	
			<?php endforeach; ?>	


			</div> 

	</section>

	