<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function bus_register_expeditions_post_type() {

	$labels = array(
		'name' 					=> 	   'Expeditions', 'Post Type General Name',
		'singular_name'			=> 	   'Expeditions', 'Post Type General Name',
		'menu_name'             =>     'Expeditions', 
		'name_admin_bar'        =>     'Expeditions', 
		'archives'              =>     'Expedition Archives', 
		'attributes'            =>     'Expedition Attributes', 
		'parent_item_colon'     =>     'Parent Item:', 
		'all_items'             =>     'All Expeditions', 
		'add_new_item'          =>     'Add New Expedition', 
		'add_new'               =>     'Add Expedition', 
		'new_item'              =>     'New Expedition', 
		'edit_item'             =>     'Edit Expedition', 
		'update_item'           =>     'Update Expedition', 
		'view_item'             =>     'View Expedition', 
		'view_items'            =>     'View Expeditions', 
		'search_items'          =>     'Search Expedition', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into item', 
		'uploaded_to_this_item' =>     'Uploaded to this item', 
		'items_list'            =>     'Expeditions list', 
		'items_list_navigation' =>     'Expeditions list navigation', 
		'filter_items_list'     =>     'Filter Expeditions list', 
	);
	$args = array(
		'label'                 =>     'Expedition', 
		'description'           =>     'expedition_description', 
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
add_action( 'init', 'bus_register_expeditions_post_type', 0 );


// upcoming expeditions Custom Post Type

function bus_register_upcoming_expeditions_post_type() {

	$labels = array(
		'name'                  =>     'Upcoming Expeditions', 'Post Type General Name', 
		'singular_name'         =>     'Upcoming Expedition', 'Post Type Singular Name', 
		'menu_name'             =>     'Upcoming Expeditions', 
		'name_admin_bar'        =>     'Upcoming Expedition', 
		'archives'              =>     'Upcoming Expedition Archives', 
		'attributes'            =>     'Upcoming Expedition Attributes', 
		'parent_item_colon'     =>     'Parent Upcoming Expedition:', 
		'all_items'             =>     'All Upcoming Expeditions', 
		'add_new_item'          =>     'Add New Upcoming Expedition', 
		'add_new'               =>     'Add New', 
		'new_item'              =>     'New Upcoming Expedition', 
		'edit_item'             =>     'Edit Upcoming Expedition', 
		'update_item'           =>     'Update Upcoming Expedition', 
		'view_item'             =>     'View Upcoming Expedition', 
		'view_items'            =>     'View Upcoming Expeditions', 
		'search_items'          =>     'Search Upcoming Expedition', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into Upcoming Expedition', 
		'uploaded_to_this_item' =>     'Uploaded to this Upcoming Expedition', 
		'items_list'            =>     'Upcoming Expedition list', 
		'items_list_navigation' =>     'Upcoming Expedition list navigation', 
		'filter_items_list'     =>     'Filter Upcoming Expedition list', 
	);
	$args = array(
		'label'                 =>     'Upcoming Expedition', 
		'description'           =>     'Post Type Description', 
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
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
	register_post_type( 'upcoming_expedition', $args );

}
add_action( 'init', 'bus_register_upcoming_expeditions_post_type', 0 );



// Products Custom Post Type
function bus_register_product_post_type() {

	$labels = array(
		'name'                  =>     'Products', 'Post Type General Name', 
		'singular_name'         =>     'Product', 'Post Type Singular Name', 
		'menu_name'             =>     'Products', 
		'name_admin_bar'        =>     'Products', 
		'archives'              =>     'Products Archives', 
		'attributes'            =>     'Products Attributes', 
		'parent_item_colon'     =>     'Parent Item:', 
		'all_items'             =>     'All Products', 
		'add_new_item'          =>     'Add New Products', 
		'add_new'               =>     'Add Product', 
		'new_item'              =>     'New Products', 
		'edit_item'             =>     'Edit Products', 
		'update_item'           =>     'Update Products', 
		'view_item'             =>     'View Products', 
		'view_items'            =>     'View Products', 
		'search_items'          =>     'Search Products', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into item', 
		'uploaded_to_this_item' =>     'Uploaded to this item', 
		'items_list'            =>     'Products list', 
		'items_list_navigation' =>     'Products list navigation', 
		'filter_items_list'     =>     'Filter Products list', 
	);
	$args = array(
		'label'                 =>     'Product', 
		'description'           =>     'product_description', 
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
add_action( 'init', 'bus_register_product_post_type', 0 );

// Register Custom Post Type
function bus_register_news_post_type() {

	$labels = array(
		'name'                  =>     'news', 'Post Type General Name', 
		'singular_name'         =>     'news', 'Post Type Singular Name', 
		'menu_name'             =>     'News', 
		'name_admin_bar'        =>     'News', 
		'archives'              =>     'News Archives', 
		'attributes'            =>     'News Attributes', 
		'parent_item_colon'     =>     'Parent Item:', 
		'all_items'             =>     'All News', 
		'add_new_item'          =>     'Add New Article', 
		'add_new'               =>     'Add Article', 
		'new_item'              =>     'New Article', 
		'edit_item'             =>     'Edit Article', 
		'update_item'           =>     'Update Article', 
		'view_item'             =>     'View Articles', 
		'view_items'            =>     'View Articles', 
		'search_items'          =>     'Search Articles', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into item', 
		'uploaded_to_this_item' =>     'Uploaded to this item', 
		'items_list'            =>     'Articles list', 
		'items_list_navigation' =>     'Articles list navigation', 
		'filter_items_list'     =>     'Filter Articles list', 
	);
	$args = array(
		'label'                 =>     'news', 
		'description'           =>     'news_description', 
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
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
add_action( 'init', 'bus_register_news_post_type', 0 );



// Register Custom Post Type for the walking bus team members (it also has a taxonomy)

function bus_register_team_post_type() {

	$labels = array(
		'name'                  =>     'Teams', 'Post Type General Name', 
		'singular_name'         =>     'Team', 'Post Type Singular Name', 
		'menu_name'             =>     'Teams', 
		'name_admin_bar'        =>     'team', 
		'archives'              =>     'team Archives', 
		'attributes'            =>     'team Attributes', 
		'parent_item_colon'     =>     'Parent team', 
		'all_items'             =>     'All teams', 
		'add_new_item'          =>     'Add New team', 
		'add_new'               =>     'Add team', 
		'new_item'              =>     'New team', 
		'edit_item'             =>     'Edit team', 
		'update_item'           =>     'Update team', 
		'view_item'             =>     'View team', 
		'view_items'            =>     'View teams', 
		'search_items'          =>     'Search team', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into team', 
		'uploaded_to_this_item' =>     'Uploaded to this team', 
		'items_list'            =>     'teams list', 
		'items_list_navigation' =>     'team list navigation', 
		'filter_items_list'     =>     'Filter team list', 
	);
	$args = array(
		'label'                 =>     'team', 
		'description'           =>     'team', 
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
add_action( 'init', 'bus_register_team_post_type', 0 );


// Register Custom Post Type
function bus_register_research_post_type() {

	$labels = array(
		'name'                  =>     'Research', 'Post Type General Name', 
		'singular_name'         =>     'Research', 'Post Type Singular Name', 
		'menu_name'             =>     'Research', 
		'name_admin_bar'        =>     'Research', 
		'archives'              =>     'Research Archives', 
		'attributes'            =>     'Research Attributes', 
		'parent_item_colon'     =>     'Parent Research:', 
		'all_items'             =>     'All Researches', 
		'add_new_item'          =>     'Add New Research', 
		'add_new'               =>     'Add New Research', 
		'new_item'              =>     'New Research', 
		'edit_item'             =>     'Edit Research', 
		'update_item'           =>     'Update Research', 
		'view_item'             =>     'View Research', 
		'view_items'            =>     'View Research', 
		'search_items'          =>     'Search Research', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Featured Image', 
		'set_featured_image'    =>     'Set featured image', 
		'remove_featured_image' =>     'Remove featured image', 
		'use_featured_image'    =>     'Use as featured image', 
		'insert_into_item'      =>     'Insert into Research', 
		'uploaded_to_this_item' =>     'Uploaded to this research', 
		'items_list'            =>     'Research list', 
		'items_list_navigation' =>     'Research list navigation', 
		'filter_items_list'     =>     'Filter Research list', 
	);
	$args = array(
		'label'                 =>     'research', 
		'description'           =>     'Post Type Description', 
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
add_action( 'init', 'bus_register_research_post_type', 0 );


// Register Custom Post Type
function bus_register_countries_post_type() {

	$labels = array(
		'name'                  =>     'Countries', 'Post Type General Name', 
		'singular_name'         =>     'Country', 'Post Type Singular Name', 
		'menu_name'             =>     'Country', 
		'name_admin_bar'        =>     'Countries Served', 
		'archives'              =>     'Countries Served Archives', 
		'attributes'            =>     'Country Attributes', 
		'parent_item_colon'     =>     'Parent Country:', 
		'all_items'             =>     'All Countries', 
		'add_new_item'          =>     'Add New Country', 
		'add_new'               =>     'Add New', 
		'new_item'              =>     'New Country', 
		'edit_item'             =>     'Edit Country', 
		'update_item'           =>     'Update Country', 
		'view_item'             =>     'View Country', 
		'view_items'            =>     'View Countries', 
		'search_items'          =>     'Search Country', 
		'not_found'             =>     'Not found', 
		'not_found_in_trash'    =>     'Not found in Trash', 
		'featured_image'        =>     'Country Image', 
		'set_featured_image'    =>     'Set Country image', 
		'remove_featured_image' =>     'Remove Country image', 
		'use_featured_image'    =>     'Use as Country image', 
		'insert_into_item'      =>     'Insert into Country', 
		'uploaded_to_this_item' =>     'Uploaded to this Country', 
		'items_list'            =>     'Countries list', 
		'items_list_navigation' =>     'Countries list navigation', 
		'filter_items_list'     =>     'Filter countries list', 
	);
	$args = array(
		'label'                 =>     'Country', 
		'description'           =>     'Countries reached by the walking school bus', 
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'countries', $args );

}
add_action( 'init', 'bus_register_countries_post_type', 0 );
