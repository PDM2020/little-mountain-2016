<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function register_lmla_type_taxonomy() {

	$labels = array(
		'name'                       => 'Staff Type',
		'singular_name'              => 'Staff Type',
		'menu_name'                  => 'Staff Type',
		'all_items'                  => 'All Staff Types',
		'parent_item'                => 'Parent Staff Type',
		'parent_item_colon'          => 'Parent Staff Type:',
		'new_item_name'              => 'New Staff Type',
		'add_new_item'               => 'Add Staff Type',
		'edit_item'                  => 'Edit Staff Type',
		'update_item'                => 'Update Staff Type',
		'view_item'                  => 'View Instructor City',
		'separate_items_with_commas' => 'Separate staff with commas',
		'add_or_remove_items'        => 'Add or remove staff',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Staff',
		'search_items'               => 'Search Staff',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No staff',
		'items_list'                 => 'staff type list',
		'items_list_navigation'      => 'staff list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'staff-type', array( 'teachers-and-staff' ), $args );

}
add_action( 'init', 'register_lmla_type_taxonomy', 0 );
