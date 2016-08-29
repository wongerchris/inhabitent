<?php
/**
 * The template for Static Front Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="front-page-hero">
				<h2 class="site-title screen-reader-text">Inhabitent</h2>
				<img class="front-site-logo" src="<?php echo(get_template_directory_uri());?>/images/inhabitent-logo-full.svg" alt="inhabitent logo white"/>
			</section>
			<div class="anchor"></div>
			<?php get_template_part( 'template-front/content', 'front-shop' ); ?>

			<?php get_template_part( 'template-front/content', 'front-blog' ); ?>

			<?php get_template_part( 'template-front/content', 'front-adventure' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
