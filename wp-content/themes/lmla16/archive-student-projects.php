<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );

				?>
			</header><!-- .page-header -->
				<ul class="blog-wrapper-outer">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<li class="blog-wrapper">
						<article id="post-<?php the_ID(); ?>">
									<div class="project-image">
										<?php
										if ( has_post_thumbnail() ) { ?>
												<?php the_post_thumbnail(); ?>
										<?php } ?>
									</div>

										<div class="blog-title">
												<?php the_title('<h2>', '</h2>' ); ?>
										</div>
									<div class="blog-content">

											<div class="blog-excerpt">
												<?php the_excerpt(); ?>
											</div>

											<div id="blog-button">
													<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
														<?php printf(
														/* Translators: %s = Name of the current post. */
														wp_kses( __( 'Read On %s', 'lmla16' ), array( 'span' => array( 'class' => array() ) ) ),
														the_title( '<span class="screen-reader-text">"', '"</span>', false )
														); ?>
													</a>
											</div>

									</div>
						</article><!-- #post-## -->
						</li><!-- blog-wrapper-->

					<?php endwhile; ?>

					<?php lmla16_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</ul> <!-- blog-wrapper-outer-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
