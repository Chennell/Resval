<?php
 function add_widgets() {
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
}
  add_action( 'widgets_init', 'add_widgets' );?>
