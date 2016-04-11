<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package LMLA2016_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lmla_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'lmla_body_classes' );

// add custom url to login page
function lmla_the_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'lmla_the_url' );

// add custom logo login page
function lmla_login_logo() {
     echo '<style type="text/css">
         h1 a { background-image:url('.get_template_directory_uri().'/images/lm-learning-academy-logo.png) !important;
				 background-size:contain !important;
			   width:100% !important;}
     </style>';
}
add_action('login_head', 'lmla_login_logo');
?>
