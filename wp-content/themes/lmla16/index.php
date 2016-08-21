<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="page-title">
						<?php if(ICL_LANGUAGE_CODE=='en'): ?>
							<h1>LMLA Education Blog</h1>
						<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
							<h1>LMLA博客</h1>
						<?php endif;?>
				</div>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<div>
					<h1 class="blog-title screen-reader-text"><?php single_post_title(); ?></h1>

				</div>
			<?php endif; ?>
<ul class="blog-wrapper-outer">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					// Is this the first post of the front page?
					$first_post = $wp_query->current_post == 0 && !is_paged() && is_front_page();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if ( $first_post == true ) {
						get_template_part( 'template-parts/content', 'single' );
					} else {
						get_template_part( 'template-parts/content-main', get_post_format() );
					}

				?>


			<?php endwhile; ?>

			<?php lmla16_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</ul> <!-- blog-wrapper-outer-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
