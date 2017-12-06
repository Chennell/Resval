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

}


add_action( 'init', 'create_project_taxonomies' );

 ?>
