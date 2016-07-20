<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lmla16
 *
* Adds language selector to footer
*/

	function language_selector_flags(){
		 if (function_exists('icl_get_languages')) {
				 $languages = icl_get_languages('skip_missing=0&orderby=code&order=desc');
				 $langs = '';
				 echo '<div class="lang-pref"><ul>';
						 if(!empty($languages)){
								 foreach($languages as $l){
										 $class = $l['active'] ? ' class="active"' : NULL;
										 $langs .=  '<li><a' . $class . ' href="'.$l['url'].'">' . strtoupper ($l['native_name']). '</a></li>';
								 }
								 $langs = substr($langs,0,-3);
								 echo $langs;
						 }
				 echo '</ul></div>';
		 }
	}

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

// include custom post types and pages in search
function lmla16_filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('post', 'pages', 'student-projects', 'courses', 'programs'));
    };
    return $query;
};
add_filter('pre_get_posts', 'lmla16_filter_search');

//custom archive student projects page title
function lmla16_sp_archive_title($title) {
if (is_post_type_archive(array('student-projects'))) {
	$title = 'Student Projects';

} elseif (is_tax('student-projects-type')) {
   $title = single_term_title('', false);

}
return $title;
}
add_filter('get_the_archive_title', 'lmla16_sp_archive_title');
