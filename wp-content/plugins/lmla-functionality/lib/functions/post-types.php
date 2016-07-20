<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_lmla_post_type() {

// Student Projects Custom Post Type
	$labels = array(
		'name'                  => 'Student Projects',
		'singular_name'         => 'Student Project',
		'menu_name'             => 'Student Projects',
		'name_admin_bar'        => 'Student Project',
		'archives'              => 'Student Project Archives',
		'parent_item_colon'     => 'Parent Student Project:',
		'all_items'             => 'All Student Projects',
		'add_new_item'          => 'Add New Student Project',
		'add_new'               => 'Add New Student Project',
		'new_item'              => 'New Student Project',
		'edit_item'             => 'Edit Student Project',
		'update_item'           => 'Update Student Project',
		'view_item'             => 'View Student Project',
		'search_items'          => 'Search Student Project',
		'not_found'             => 'No Student Projects found',
		'not_found_in_trash'    => 'No Student Projects found in Trash',
		'featured_image'        => 'Student Project Image',
		'set_featured_image'    => 'Set student project featured image',
		'remove_featured_image' => 'Remove student project featured image',
		'use_featured_image'    => 'Use as student project featured image',
		'insert_into_item'      => 'Insert into student project',
		'uploaded_to_this_item' => 'Uploaded to this student project',
		'items_list'            => 'Student Project list',
		'items_list_navigation' => 'Student Project list navigation',
		'filter_items_list'     => 'Filter student project list',

	);
	$args = array(
		'label'                 => 'Student Projects',
		'description'           => 'Student Projects for Little Mountain',
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
		'has_archive'           => 'student-projects',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'student-projects', $args );

// Courses Custom Post Type

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
		'menu_position'         => 5,
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

// Programs Custom Post Type
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
		'menu_position'         => 5,
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

	// Teachers and Staff Custom Post Type
		$labels = array(
			'name'                  => 'Staff',
			'singular_name'         => 'Staff',
			'menu_name'             => 'Staff',
			'name_admin_bar'        => 'Staff',
			'archives'              => 'Staff Archives',
			'parent_item_colon'     => 'Parent Staff:',
			'all_items'             => 'All Staff',
			'add_new_item'          => 'Add New Staff',
			'add_new'               => 'Add New',
			'new_item'              => 'New Staff',
			'edit_item'             => 'Edit Staff',
			'update_item'           => 'Update Staff',
			'view_item'             => 'View Staff',
			'search_items'          => 'Search Staff',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Biography Photo',
			'set_featured_image'    => 'Set Biography Photo',
			'remove_featured_image' => 'Remove biography photo',
			'use_featured_image'    => 'Use as biography photo',
			'insert_into_item'      => 'Insert into staff',
			'uploaded_to_this_item' => 'Uploaded to this staff',
			'items_list'            => 'Staff list',
			'items_list_navigation' => 'Staff list navigation',
			'filter_items_list'     => 'Filter staff list',
		);
		$args = array(
			'label'                 => 'Staff',
			'description'           => 'Staff for Little Mountain',
			'labels'                => $labels,
			'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-users',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => 'teachers-and-staff',
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'teachers-and-staff', $args );

}

add_action( 'init', 'register_lmla_post_type', 0 );
