<?php
function create_project_taxonomies() {
  $labels = array(
    'name'                       => _x( 'Project', 'Taxonomy General Name', 'resval-theme' ),
    'singular_name'              => _x( 'Project', 'Taxonomy Singular Name', 'resval-theme' ),
    'menu_name'                  => __( 'Projects Category', 'resval-theme' ),
    'all_items'                  => __( 'All Projects', 'resval-theme' ),
    'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
    'add_new_item'               => __( 'Add New Project', 'resval-theme' ),
    'edit_item'                  => __( 'Edit Project', 'resval-theme' ),
    'update_item'                => __( 'Update Project', 'resval-theme' ),
    'add_or_remove_items'        => __( 'Add or Remove Projects', 'resval-theme' ),
    'popular_items'              => __( 'Popular Projects', 'resval-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-cat',
  );
  register_taxonomy( 'project-cat', array('project'), $args );

// -- Project Topic
  $labels = array(
    'name'                       => _x( 'Project Topic', 'Taxonomy General Name', 'resval-theme' ),
    'singular_name'              => _x( 'Project Topics', 'Taxonomy Singular Name', 'resval-theme' ),
    'menu_name'                  => __( 'Project Topic', 'resval-theme' ),
    'all_items'                  => __( 'All Project Topics', 'resval-theme' ),
    'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
    'add_new_item'               => __( 'Add New Project Topic', 'resval-theme' ),
    'edit_item'                  => __( 'Edit Project Topic', 'resval-theme' ),
    'update_item'                => __( 'Update Project Topic', 'resval-theme' ),
    'add_or_remove_items'        => __( 'Add or Remove Project Topics', 'resval-theme' ),
    'popular_items'              => __( 'Popular Project Topics', 'resval-theme' ),
	);
	$args1 = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-topic',
  );
  register_taxonomy( 'project-topic', array('project'), $args1 );

  // -- Project Cost

  $labels = array(
    'name'                       => _x( 'Project Cost', 'Taxonomy General Name', 'resval-theme' ),
    'singular_name'              => _x( 'Project Costs', 'Taxonomy Singular Name', 'resval-theme' ),
    'menu_name'                  => __( 'Project Cost', 'resval-theme' ),
    'all_items'                  => __( 'All Project Costs', 'resval-theme' ),
    'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
    'add_new_item'               => __( 'Add New Project Cost', 'resval-theme' ),
    'edit_item'                  => __( 'Edit Project Cost', 'resval-theme' ),
    'update_item'                => __( 'Update Project Cost', 'resval-theme' ),
    'add_or_remove_items'        => __( 'Add or Remove Project Costs', 'resval-theme' ),
    'popular_items'              => __( 'Popular Project Costs', 'resval-theme' ),
  );
  $args1 = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'project-cost',
  );
  register_taxonomy( 'project-cost', array('project'), $args1 );


  // -- Project time

    $labels = array(
      'name'                       => _x( 'Project Time', 'Taxonomy General Name', 'resval-theme' ),
      'singular_name'              => _x( 'Project Times', 'Taxonomy Singular Name', 'resval-theme' ),
      'menu_name'                  => __( 'Project Time', 'resval-theme' ),
      'all_items'                  => __( 'All Project Times', 'resval-theme' ),
      'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
      'add_new_item'               => __( 'Add New Project Time', 'resval-theme' ),
      'edit_item'                  => __( 'Edit Project Time', 'resval-theme' ),
      'update_item'                => __( 'Update Project Time', 'resval-theme' ),
      'add_or_remove_items'        => __( 'Add or Remove Project Times', 'resval-theme' ),
      'popular_items'              => __( 'Popular Project Times', 'resval-theme' ),
    );
    $args1 = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'query_var'                  => 'project-time',
    );
    register_taxonomy( 'project-time', array('project'), $args1 );

    // -- Project Difficulty

      $labels = array(
        'name'                       => _x( 'Project Difficulty', 'Taxonomy General Name', 'resval-theme' ),
        'singular_name'              => _x( 'Project Difficulties', 'Taxonomy Singular Name', 'resval-theme' ),
        'menu_name'                  => __( 'Project Difficulty', 'resval-theme' ),
        'all_items'                  => __( 'All Project Difficulties', 'resval-theme' ),
        'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
        'add_new_item'               => __( 'Add New Project Difficulty', 'resval-theme' ),
        'edit_item'                  => __( 'Edit Project Difficulty', 'resval-theme' ),
        'update_item'                => __( 'Update Project Difficulty', 'resval-theme' ),
        'add_or_remove_items'        => __( 'Add or Remove Project Difficulties', 'resval-theme' ),
        'popular_items'              => __( 'Popular Project Difficulties', 'resval-theme' ),
      );
      $args1 = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var'                  => 'project-difficulty',
      );
      register_taxonomy( 'project-difficulty', array('project'), $args1 );

      
}



add_action( 'init', 'create_project_taxonomies' );


 ?>
