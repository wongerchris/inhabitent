<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer">
				
					<div id="footer-widget-wrapper" class="inner-footer-wrapper">
						<div class="footer-sidebar footer-1">
							<?php
								if(is_active_sidebar('footer-sidebar-1')){
										dynamic_sidebar('footer-sidebar-1');
									}
							?>
						</div>
						<div class="footer-sidebar footer-2">
							<?php
								if(is_active_sidebar('footer-sidebar-2')){
									dynamic_sidebar('footer-sidebar-2');
								}
							?>
						</div>
						<div class="footer-sidebar footer-3">
							<?php
								if(is_active_sidebar('footer-sidebar-3')){
									dynamic_sidebar('footer-sidebar-3');
								}
							?>
						</div>
						<div class="footer-sidebar footer-4-logo">
							<img class="footer-logo" src="<?php echo(get_template_directory_uri());?>/images/inhabitent-logo-text.svg" alt="Books" />
						</div>
					</div><!-- .inner-footer-wrapper -->
					
					<div class="footer-info">
						<?php printf( esc_html( 'Copyright &copy; 2016 Inhabitent' )); ?>
					</div>
					
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
