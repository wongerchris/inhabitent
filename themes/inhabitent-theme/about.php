<?php
/*
Template Name: About Template Page
*/
/**
 * The template for displaying the About Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="about-hero-image">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="anchor"></div>
<div class="container about-page">

		<?php while ( have_posts() ) : the_post(); ?>

			<h3><?php echo CFS()->get( 'our_story_title' ); ?></h3>
			<p><?php echo CFS()->get( 'our_story_paragraph' ); ?></p>
			<h3><?php echo CFS()->get( 'our_team_title' ); ?></h3>
			<p><?php echo CFS()->get( 'our_team_paragraph' ); ?></p>


		<?php endwhile; // End of the loop. ?>
	</div>
</div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
