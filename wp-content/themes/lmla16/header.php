<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lmla16
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
		<a href="#content" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'lmla16' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<div class="student-login-link">
				<a href="/wp-admin/">Student Login Portal</a>
			</div>

			<!-- <div class="lmla-phone">
				<div class="cel-border"><i class="fa fa-phone"></i></div><span>Call Now: <a href="tel:555-555-1212">&nbsp;555-555-1212</a></span>
			</div> -->

			<div class="student-login-form"><span>Student Login Portal</span>
				<form>
            <input type="email" name="student-email" value="" placeholder="Enter Student Email" />
						<input type="password" name="student-password" value="" placeholder="Enter Student Password" />
            <input type="submit" name="student-login" value="Login" />
					</form>
			</div>

			<div class="site-logo">
				<?php $site_title = get_bloginfo( 'name' ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() ?>/images/little-mountain-logo.png"alt="Little Mountain Learning Academy Logo">

					<div class="screen-reader-text">
						<?php printf( esc_html__('Go to the home page of %1$s', 'lmla16'), $site_title ); ?>
					</div>
				</a>
			</div><!-- .site-logo -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">
				<?php putRevSlider('homepage', 'homepage'); ?>
