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

				<ul class="blog-wrapper-outer"> <!-- student project partial-->

<?php



 ?>
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

				<div class="our-staff-title">

					<h1><?php echo CFS()->get( 'our_teachers_title' ); ?></h1>
					<h1><?php echo CFS()->get( 'our_staff_title' ); ?></h1>

						<li class="teacher-wrapper-single">

						<article id="post-<?php the_ID(); ?>">

									<div class="image-name-job-wrapper">

											<?php
											if ( has_post_thumbnail() ) { ?>
												<div class="bio-image-wrapper">
													<?php the_post_thumbnail('lmla-profile-pic'); ?>
												</div>
											<?php } ?>

											<div class="staff-wrapper">
													<?php the_title( '<span id="staff-name" >', '</span>' ); ?>
													<span id="job-title"><?php echo CFS()->get( 'staff_job_title' ); ?></span>

											</div>
									</div>

											<div class="staff-bio">
												<?php the_content(); ?>
												<div class="entry-footer">
													<?php
														edit_post_link(
															sprintf(
																/* translators: %s: Name of current post */
																esc_html__( 'Edit %s', 'lmla16' ),
																the_title( '<span class="screen-reader-text">"', '"</span>', false )
															),
															'<span class="edit-link">',
															'</span>'
														);
													?>
												</div><!-- .entry-footer -->
											</div>


						</article><!-- #post-## -->
						</li><!-- blog-wrapper-->
					</div>


					<?php endwhile; ?>


				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</ul> <!-- blog-wrapper-outer-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
