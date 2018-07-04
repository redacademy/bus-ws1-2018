<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...



// Register Custom Taxonomy Team types
function teams_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Team Types', 'Taxonomy General Name', 'text-domain' ),
		'singular_name'              => _x( 'Team Type', 'Taxonomy Singular Name', 'text-domain' ),
		'menu_name'                  => __( 'Team Types', 'text-domain' ),
		'all_items'                  => __( 'All Team Types', 'text-domain' ),
		'parent_item'                => __( 'Parent Team Type', 'text-domain' ),
		'parent_item_colon'          => __( 'Parent Team Type', 'text-domain' ),
		'new_item_name'              => __( 'New Team Type', 'text-domain' ),
		'add_new_item'               => __( 'Add Team Type', 'text-domain' ),
		'edit_item'                  => __( 'Edit Team Type', 'text-domain' ),
		'update_item'                => __( 'Update Team Type', 'text-domain' ),
		'view_item'                  => __( 'View Team Type', 'text-domain' ),
		'separate_items_with_commas' => __( 'Separate Team Type with commas', 'text-domain' ),
		'add_or_remove_items'        => __( 'Add or remove Team Type', 'text-domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text-domain' ),
		'popular_items'              => __( 'Popular Team Type', 'text-domain' ),
		'search_items'               => __( 'Search Team Type', 'text-domain' ),
		'not_found'                  => __( 'Not Found', 'text-domain' ),
		'no_terms'                   => __( 'No items', 'text-domain' ),
		'items_list'                 => __( 'Items list', 'text-domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text-domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'team_type', array( 'team' ), $args );

}
add_action( 'init', 'teams_custom_taxonomy', 0 ); 