<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="front-page-hero">
				<img class="front-site-logo"src="<?php bloginfo('template_directory'); ?>/images/inhabitent-logo-full.svg" alt="inhabitent logo white" border="0"/>
			</section>
			
			<section class="shop-stuff container">
				<h2>Shop Stuff</h2>
				<div class="shop-stuff-container">
					<div class="shop-stuff-box">
						<img class="shop-stuff-icon"src="<?php bloginfo('template_directory'); ?>/images/do.svg" alt="inhabitent logo white" border="0"/>
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<a href="#" class="btn">Do Stuff</a>
					</div>
					<div class="shop-stuff-box">
						<img class="shop-stuff-icon"src="<?php bloginfo('template_directory'); ?>/images/eat.svg" alt="inhabitent logo white" border="0"/>
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<a href="#" class="btn">Eat Stuff</a>
					</div>
					<div class="shop-stuff-box">
						<img class="shop-stuff-icon"src="<?php bloginfo('template_directory'); ?>/images/sleep.svg" alt="inhabitent logo white" border="0"/>
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<a href="#" class="btn">Sleep Stuff</a>
					</div>
					<div class="shop-stuff-box">
						<img class="shop-stuff-icon"src="<?php bloginfo('template_directory'); ?>/images/wear.svg" alt="inhabitent logo white" border="0"/>
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<a href="#" class="btn">Wear Stuff</a>
					</div>
				</div>
			</section>

			<section class="adventure-stuff container">
				<h2>Latest Adventures</h2>

				<div class="adventure-stuff-container">
					<div class="adventure-big">
						<div class="adventure-stuff-box  adventure-1" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/canoe-girl.jpg)">
						<div class="adventure-info">
							<h3>Getting Back to Nature in a Canoe</h3>
							<a href="#" class="btn btn-white">Read More</a>
						</div>
						</div>
					</div>
					<div class="adventure-small">
						<div class="adventure-stuff-box adventure-2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/beach-bonfire.jpg)">
						<div class="adventure-info">
							<h3>A Night with Friends at the Beach</h3>
							<a href="#" class="btn btn-white">Read More</a>
						</div>
						</div>
						<div class="adventure-stuff-box adventure-3" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/mountain-hikers.jpg)">
						<div class="adventure-info">
							<h3>Taking in the View at Big Mountain</h3>
							<a href="#" class="btn btn-white">Read More</a>
						</div>
						</div>
						<div class="adventure-stuff-box adventure-4" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/night-sky.jpg)">
						<div class="adventure-info">	
							<h3>Star-Gazing at the Night Sky</h3>
							<a href="#" class="btn btn-white">Read More</a>
						</div>
						</div>
					</div>
				</div>
			</section>


				
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
