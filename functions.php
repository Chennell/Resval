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
?>
