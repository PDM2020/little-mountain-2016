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

			<div class="lmla-phone-wrapper">
				<div class="lmla-phone">
				<?php if(ICL_LANGUAGE_CODE=='en'): ?>
					<span><i class="fa fa-phone"></i> <strong>Call Now: </strong><a href="tel:604-221-2363">604-221-2363</a></span>
				<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
				<span><i class="fa fa-phone"></i> <strong>报名请致电: </strong><a href="tel:604-221-2363">604-221-2363</a></span>
				<?php endif;?>
			</div>

			<div id="language_list_header" >
								<?php language_selector_header(); ?>
							</div>
		</div>

<div id="menu-toggle" class="menu-toggle"><i class="fa fa-bars"></i></div>
	<div class="site-header-main">

			<div class="site-logo">
				<?php $site_title = get_bloginfo( 'name' ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() ?>/images/little-mountain-logo.svg" alt="Little Mountain Learning Academy Logo" />

					<div class="screen-reader-text">
						<?php printf( esc_html__('Go to the home page of %1$s', 'lmla16'), $site_title ); ?>
					</div>
				</a>
			</div><!-- .site-logo -->



			<div id="site-header-menu" class="site-header-menu">

					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'lmla16' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							 ) );
						?>
					</nav><!-- .main-navigation -->
			</div><!-- .site-header-menu -->
	</div><!-- .site-header-main-->

		</header><!-- #masthead -->

		<div id="content" class="site-content">
