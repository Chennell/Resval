<?php
 function add_widgets() {
  $args = array(
    'id'            => 'page-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Page Sidebar', 'Resval' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show my skills and social links', 'resval_theme' ),

  );
     register_sidebar( $args );

     $args2 = array(
    'id'            => 'project-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Project Sidebar', 'resval_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'A guide how to travel sustainably.', 'resval_theme' ),

  );
  register_sidebar( $args2 );



// $args3 = array(
//     'id'            => 'site-description',
//     /** Visible name in the Admin Dashboard Widget page */
//     'name'          => __( 'Site Description', 'portfolio_theme' ),
//     /** Visible description in the Admin Dashboard Widget page */
//     'description'   => __( 'Short decription about the website', 'portfolio_theme' ),
//
// //    /** HTML to wrap widget title in  */
// //    'before_title'  => '<p class="widget-title">',
// //    'after_title'   => '</p>',
// //    /** HTML to wrap each widget  */
// //    'before_widget' => '<section>',
// //    'after_widget'  => '</section>',
//   );
//   register_sidebar( $args3 );
//  }
 add_action( 'widgets_init', 'add_widgets' );
?>
