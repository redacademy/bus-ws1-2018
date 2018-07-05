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
        'menu_icon'             => 'dashicons-admin-site',
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

// Register Custom Post Type
function Products() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Products', 'text_domain' ),
		'archives'              => __( 'Products Archives', 'text_domain' ),
		'attributes'            => __( 'Products Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Products', 'text_domain' ),
		'add_new'               => __( 'Add Product', 'text_domain' ),
		'new_item'              => __( 'New Products', 'text_domain' ),
		'edit_item'             => __( 'Edit Products', 'text_domain' ),
		'update_item'           => __( 'Update Products', 'text_domain' ),
		'view_item'             => __( 'View Products', 'text_domain' ),
		'view_items'            => __( 'View Products', 'text_domain' ),
		'search_items'          => __( 'Search Products', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Products list', 'text_domain' ),
		'items_list_navigation' => __( 'Products list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'product_description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
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
        'menu_icon'             => 'dashicons-cart',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'Products', 0 );

// Register Custom Post Type
function News() {

	$labels = array(
		'name'                  => _x( 'news', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'news', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'News', 'text_domain' ),
		'name_admin_bar'        => __( 'News', 'text_domain' ),
		'archives'              => __( 'News Archives', 'text_domain' ),
		'attributes'            => __( 'News Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All News', 'text_domain' ),
		'add_new_item'          => __( 'Add New Article', 'text_domain' ),
		'add_new'               => __( 'Add Article', 'text_domain' ),
		'new_item'              => __( 'New Article', 'text_domain' ),
		'edit_item'             => __( 'Edit Article', 'text_domain' ),
		'update_item'           => __( 'Update Article', 'text_domain' ),
		'view_item'             => __( 'View Articles', 'text_domain' ),
		'view_items'            => __( 'View Articles', 'text_domain' ),
		'search_items'          => __( 'Search Articles', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Articles list', 'text_domain' ),
		'items_list_navigation' => __( 'Articles list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Articles list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'news', 'text_domain' ),
		'description'           => __( 'news_description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'News', 0 );



// Register Custom Post Type for the walking bus team members (it also has a taxonomy)

function team() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Teams', 'text_domain' ),
		'name_admin_bar'        => __( 'team', 'text_domain' ),
		'archives'              => __( 'team Archives', 'text_domain' ),
		'attributes'            => __( 'team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent team', 'text_domain' ),
		'all_items'             => __( 'All teams', 'text_domain' ),
		'add_new_item'          => __( 'Add New team', 'text_domain' ),
		'add_new'               => __( 'Add team', 'text_domain' ),
		'new_item'              => __( 'New team', 'text_domain' ),
		'edit_item'             => __( 'Edit team', 'text_domain' ),
		'update_item'           => __( 'Update team', 'text_domain' ),
		'view_item'             => __( 'View team', 'text_domain' ),
		'view_items'            => __( 'View teams', 'text_domain' ),
		'search_items'          => __( 'Search team', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into team', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team', 'text_domain' ),
		'items_list'            => __( 'teams list', 'text_domain' ),
		'items_list_navigation' => __( 'team list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter team list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'team', 'text_domain' ),
		'description'           => __( 'team', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
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
	register_post_type( 'team', $args );

}
add_action( 'init', 'team', 0 );


// Register Custom Post Type
function research() {

	$labels = array(
		'name'                  => _x( 'Research', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Research', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Research', 'text_domain' ),
		'name_admin_bar'        => __( 'Research', 'text_domain' ),
		'archives'              => __( 'Research Archives', 'text_domain' ),
		'attributes'            => __( 'Research Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Research:', 'text_domain' ),
		'all_items'             => __( 'All Researches', 'text_domain' ),
		'add_new_item'          => __( 'Add New Research', 'text_domain' ),
		'add_new'               => __( 'Add New Research', 'text_domain' ),
		'new_item'              => __( 'New Research', 'text_domain' ),
		'edit_item'             => __( 'Edit Research', 'text_domain' ),
		'update_item'           => __( 'Update Research', 'text_domain' ),
		'view_item'             => __( 'View Research', 'text_domain' ),
		'view_items'            => __( 'View Research', 'text_domain' ),
		'search_items'          => __( 'Search Research', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Research', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this research', 'text_domain' ),
		'items_list'            => __( 'Research list', 'text_domain' ),
		'items_list_navigation' => __( 'Research list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Research list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'research', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
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
	register_post_type( 'research', $args );

}
add_action( 'init', 'research', 0 );



