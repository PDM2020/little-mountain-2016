<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_lmla_post_type() {

// Coaching Custom Post Type (position 5)
	$labels = array(
		'name'                  => 'Coaching',
		'singular_name'         => 'Coaching',
		'menu_name'             => 'Coaching',
		'name_admin_bar'        => 'Coaching',
		'archives'              => 'Coaching Archives',
		'parent_item_colon'     => 'Parent Coaching:',
		'all_items'             => 'All Coaching',
		'add_new_item'          => 'Add New Coaching',
		'add_new'               => 'Add New',
		'new_item'              => 'New Coaching',
		'edit_item'             => 'Edit Coaching',
		'update_item'           => 'Update Coaching',
		'view_item'             => 'View Coaching',
		'search_items'          => 'Search Coaching',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into coaching',
		'uploaded_to_this_item' => 'Uploaded to this coaching',
		'items_list'            => 'Coaching list',
		'items_list_navigation' => 'Coaching list navigation',
		'filter_items_list'     => 'Filter coaching list',
	);
	$args = array(
		'label'                 => 'Coaching',
		'description'           => 'Coaching Sevices for Little Mountain',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'coaching',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'coaching', $args );
	
	
// Partners Custom Post Type  (position 6)
	$labels = array(
		'name'                  => 'Partnerships',
		'singular_name'         => 'Partner',
		'menu_name'             => 'Partnerships',
		'name_admin_bar'        => 'Partnerships',
		'archives'              => 'Partnership Archives',
		'parent_item_colon'     => 'Parent Partnerships:',
		'all_items'             => 'All Partnerships',
		'add_new_item'          => 'Add New Partner',
		'add_new'               => 'Add New',
		'new_item'              => 'New Partner',
		'edit_item'             => 'Edit Partner',
		'update_item'           => 'Update Partner',
		'view_item'             => 'View Partner',
		'search_items'          => 'Search Partner',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into partner',
		'uploaded_to_this_item' => 'Uploaded to this partner',
		'items_list'            => 'Partnerships list',
		'items_list_navigation' => 'Partners list navigation',
		'filter_items_list'     => 'Filter partnerships list',
	);
	$args = array(
		'label'                 => 'Partnerships',
		'description'           => 'Community Partners for Little Mountain',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'partnerships',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'partnerships', $args );

}
add_action( 'init', 'register_lmla_post_type', 0 );
