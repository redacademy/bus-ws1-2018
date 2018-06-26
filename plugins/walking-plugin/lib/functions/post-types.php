<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function Expeditions() {

	$labels = array(
		'name'                  => _x( 'Expeditions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Expedition', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Expeditions', 'text_domain' ),
		'name_admin_bar'        => __( 'Expeditions', 'text_domain' ),
		'archives'              => __( 'Expedition Archives', 'text_domain' ),
		'attributes'            => __( 'Expedition Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Expeditions', 'text_domain' ),
		'add_new_item'          => __( 'Add New Expedition', 'text_domain' ),
		'add_new'               => __( 'Add Expedition', 'text_domain' ),
		'new_item'              => __( 'New Expedition', 'text_domain' ),
		'edit_item'             => __( 'Edit Expedition', 'text_domain' ),
		'update_item'           => __( 'Update Expedition', 'text_domain' ),
		'view_item'             => __( 'View Expedition', 'text_domain' ),
		'view_items'            => __( 'View Expeditions', 'text_domain' ),
		'search_items'          => __( 'Search Expedition', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Expeditions list', 'text_domain' ),
		'items_list_navigation' => __( 'Expeditions list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Expeditions list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Expedition', 'text_domain' ),
		'description'           => __( 'expedition_description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'expedition', $args );

}
add_action( 'init', 'Expeditions', 0 );
