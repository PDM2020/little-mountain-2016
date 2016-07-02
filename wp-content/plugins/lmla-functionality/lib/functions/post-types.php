<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_lmla_post_type() {

// Coaching Custom Post Type (position 6)
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

// Courses Custom Post Type  (position 7)

	$labels = array(
		'name'                  => 'Courses',
		'singular_name'         => 'Course',
		'menu_name'             => 'Courses',
		'name_admin_bar'        => 'Courses',
		'archives'              => 'Course Archives',
		'parent_item_colon'     => 'Parent Courses:',
		'all_items'             => 'All Courses',
		'add_new_item'          => 'Add New Course',
		'add_new'               => 'Add New',
		'new_item'              => 'New Course',
		'edit_item'             => 'Edit Course',
		'update_item'           => 'Update Course',
		'view_item'             => 'View Course',
		'search_items'          => 'Search Courses',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into course',
		'uploaded_to_this_item' => 'Uploaded to this course',
		'items_list'            => 'Courses list',
		'items_list_navigation' => 'Courses list navigation',
		'filter_items_list'     => 'Filter Courses list',

	);
	$args = array(
		'label'                 => 'Courses',
		'description'           => 'Courses for Little Mountain',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'courses',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'courses', $args );

// Programs Custom Post Type  (position 4)
	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Programs',
		'archives'              => 'Program Archives',
		'parent_item_colon'     => 'Parent Programs:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add New',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'search_items'          => 'Search Programs',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into program',
		'uploaded_to_this_item' => 'Uploaded to this program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Programs',
		'description'           => 'Programs for Little Mountain',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'programs',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'programs', $args );

}

add_action( 'init', 'register_lmla_post_type', 0 );
