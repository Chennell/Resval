<?php
function create_project_taxonomies() {
  $labels = array(
    'name'                       => _x( 'recipe', 'Taxonomy General Name', 'resval-theme' ),
    'singular_name'              => _x( 'Recipe', 'Taxonomy Singular Name', 'resval-theme' ),
    'menu_name'                  => __( 'Recipes', 'resval-theme' ),
    'all_items'                  => __( 'All Recipes', 'resval-theme' ),
    'new_item_name'              => __( 'New Type Name', 'resval-theme' ),
    'add_new_item'               => __( 'Add New Recipe', 'resval-theme' ),
    'edit_item'                  => __( 'Edit Recipe', 'resval-theme' ),
    'update_item'                => __( 'Update Recipe', 'resval-theme' ),
    'add_or_remove_items'        => __( 'Add or remove Recipes', 'resval-theme' ),
    'popular_items'              => __( 'Popular Recipes', 'resval-theme' ),
	);
	$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'query_var'                  => 'recipe',
  );
  register_taxonomy( 'recipe', array('project'), $args );

}


add_action( 'init', 'create_project_taxonomies' );

 ?>
