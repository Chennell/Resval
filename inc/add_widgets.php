<?php
 function add_widgets() {

   /* Contact form
   -------------------------------- */
  $args = array(
    'id'            => 'contact-form',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Contact Form', 'resval_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Contact Form Protection', 'resval_theme' ),

    'before_title' => '<p class="widget title">',
    'after_title' => '</p>',

    'before_widget' => '<section>',
    'after_widget' => '</section>',
  );
register_sidebar ($args);


/* Footer
-------------------------------- */

  register_sidebar( array(
  'name' => 'Footer',
  'id' => 'footer-sidebar',
  'description' => 'Appears in the footer area on every page',
  'before_widget' => '<li><div id="footer-logo"">',
  'after_widget' => '</div></li>',

  ) );



/* Bidra form
-------------------------------- */
  $args = array(
    'id'            => 'bidra-form',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Bidra form', 'resval_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Birda Form Protection', 'resval_theme' ),

    'before_title' => '<p class="widget title">',
    'after_title' => '</p>',

    'before_widget' => '<section>',
    'after_widget' => '</section>',
  );
register_sidebar ($args);




}
  add_action( 'widgets_init', 'add_widgets' );?>
