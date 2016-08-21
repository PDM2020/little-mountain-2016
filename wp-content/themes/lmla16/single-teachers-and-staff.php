<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lmla16
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php global $first_post; ?>

			<div class="teacher-wrapper-single">

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
			</div><!-- blog-wrapper-->

			<?php

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'lmla16' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'lmla16' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'lmla16' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'lmla16' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div> <!-- #primary -->

<?php get_footer(); ?>
