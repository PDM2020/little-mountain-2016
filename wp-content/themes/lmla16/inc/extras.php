<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lmla16
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lmla16_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'lmla16_body_classes' );

// add custom url to login page
function lmla16_the_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'lmla16_the_url' );

// add custom logo login page
function lmla16_login_logo() {
     echo '<style type="text/css">
         h1 a { background-image:url('.get_template_directory_uri().'/images/lm-learning-academy-logo.png) !important;
				 background-size:contain !important;
			   width:100% !important;}
     </style>';
}
add_action('login_head', 'lmla16_login_logo');


// custom archive (partnerships) page title
function lmla16_archive_title($title) {
if (is_post_type_archive(array('programs'))) {
	$title = 'Our Prgrams Are Made Fresh Daily';

} elseif (is_tax('product-type')) {
   $title = single_term_title('', false);
}
return $title;
}

add_filter('get_the_archive_title', 'lmla16_archive_title');
