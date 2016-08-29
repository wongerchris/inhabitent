<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site"></div>
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="head">
				<div class="site-header container">
					<div class="site-branding">
					
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

							<p class="site-description"><?php bloginfo( 'description' );?></p>
	
				
						<!-- <?php if (is_page( array('home','about'))) { ?>

	    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/inhabitent-logo-tent-white.svg" alt="inhabitent logo white"/>
							</a>

	    			<?php } else{ ?>

	    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/inhabitent-logo-tent.svg" alt="inhabitent logo white"/>
							</a>

	    			<?php } ?> -->
	    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">	
					<div class="logo">
					
					</div>
					</a>
						
					

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<a href="#" class="search-toggle" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>
							<?php get_template_part( 'template-parts/content', 'search-menu' ); ?>
					</nav><!-- #site-navigation -->
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
