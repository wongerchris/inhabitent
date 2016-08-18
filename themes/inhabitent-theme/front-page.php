<?php
/**
 * The template for Static Front Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="front-page-hero">
				<img class="front-site-logo"src="<?php bloginfo('template_directory'); ?>/images/inhabitent-logo-full.svg" alt="inhabitent logo white" border="0"/>
			</section>
			
			<?php get_template_part( 'template-front/content', 'front-shop' ); ?>

			<?php get_template_part( 'template-front/content', 'front-blog' ); ?>

			<?php get_template_part( 'template-front/content', 'front-adventure' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
