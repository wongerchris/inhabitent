<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

//Change the login logo to Inhabitent log
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px;
            background-size: 300px 53px;
            height:53px;
            width:300px;
        }
    </style>
<?php }
add_action( 'login_head', 'my_login_logo' );

//Change inhabitent login link url to inhabitent home page
function inhabitent_login_url(){
	return home_url();
}

add_filter('login_headerurl','inhabitent_login_url');

//Change the inhabitent login logo hover to print out below
function inhabitent_title_hover(){
	return 'Inhabitent Supply Co';
}
add_filter('login_headertitle','inhabitent_title_hover');


//Adjusting archive page loop for product page
function inhabitent_modify_product_archive_query($query){
    if(is_post_type_archive('product') && !is_admin() && $query->is_main_query()){
        $query->set('posts_per_page', 16);
        $query->set('order','ASC');
        $query->set('orderby','title');
    }
}
add_action('pre_get_posts','inhabitent_modify_product_archive_query');

//Adjusting archive page loop for product page
function inhabitent_modify_adventure_archive_query($query){
    if(is_post_type_archive('adventure') && !is_admin() && $query->is_main_query()){
        $query->set('posts_per_page', 4);
        $query->set('order','ASC');
        $query->set('orderby','date');
    }
}
add_action('pre_get_posts','inhabitent_modify_adventure_archive_query');

//To use inline style for background image

function inhabitent_inline_styles_method() {
    if (!is_page_template('about.php')){
        return;

    }
        $imageUrl = CFS()->get( 'about_banner_image' );

        if(!$imageUrl){
          return;
        }


        $custom_css = "
                .about-hero-image{
                  background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url({$imageUrl}) no-repeat bottom;
                  background-size: cover;
                  height: 100vh;
                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_inline_styles_method' );







