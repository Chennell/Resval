<?php
add_theme_support('title-tag');

//adding thumbnail function
add_theme_support('post-thumbnails');


//adding selecting formats
add_theme_support('post-formats');

add_theme_support( 'custom-header' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

add_image_size( 'front_page_img_single', 660, 400, true );
add_image_size( 'about_logo', 100, 100, true );
?>
