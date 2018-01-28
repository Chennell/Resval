<?php
//acf plugin
define('ACF_EARLY_ACCESS', '5');



include("inc/reg_post_type.php");
include("inc/reg_taxonomy.php");
include("inc/reg_my_menus.php");
include("inc/add_widgets.php");
include("inc/add_theme_support.php");
include("inc/add_image_size.php");

wp_enqueue_script(
    'flexslider',
    get_bloginfo('template_url') . '/js/jquery.flexslider-min.js',
    array( 'jquery' )
);


// THIS IS TO GET THE CURRENT PAGE FOR ARCHIVE AS WELL
// Taken from this page https://gist.github.com/gerbenvandijk/5253921
 add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

	function add_current_nav_class($classes, $item) {

		// Getting the current post details
		global $post;

		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite['slug'];

		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));

		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {

		   $classes[] = 'current-menu-item';

		}

		// Return the corrected set of classes to be added to the menu item
		return $classes;

	}


  // For carousel slider


  add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
function carousel_slider_load_scripts( $load_scripts ) {
    // To use only for front page
    if ( is_front_page() ) {
        return true;
    }
    return $load_scripts;
}


add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}

//  add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
//function carousel_slider_load_scripts( $load_scripts ) {
//    // To use only for front page
//    if ( is_front_page() ) {
//        return true;
//    }
//    return $load_scripts;
//}

?>
