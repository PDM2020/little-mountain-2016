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
			<?php putRevSlider('programs', 'programs'); ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-header">
					<?php the_title('<h2 class="program-title">', '</h2>' ); ?>
				</div><!-- .entry-header -->

				<div class="entry-content index-excerpt">

					<li><h3 class="program-sub-title">Overview</h3></li>

					<?php the_content(); ?>

				</div><!-- .entry-content -->

			<section class="program-courses-wrapper">

					<li><h3 class="program-sub-title">Stream Class</h3></li>

<!-- 1st course -->
				<div class="stream-class-wrapper">

					<div class="animal-image">
							<img src="<?php echo CFS()->get( 'animal_image' ); ?>">
					</div>

						<div class="name-description">
								<div class="class-name">
									<?php echo CFS()->get( 'stream_course_title' ); ?>
								</div>

								<div class="class-description">
									<?php echo CFS()->get( 'stream_course_descripton' ); ?>
								</div>
								<div class="continue-reading cr-float">
									<?php echo CFS()->get( 'program_course_link' ); ?>
								</div>
						</div><!-- name-description -->



					</div><!-- stream class wrapper-->

<!-- 2nd course -->

					<div class="stream-class-wrapper">

						<div class="animal-image">
								<img src="<?php echo CFS()->get( '2nd_animal_image' ); ?>">
						</div>

				<div class="name-description">
									<div class="class-name">
										<?php echo CFS()->get( '2nd_stream_course_title' ); ?>
									</div>

									<div class="class-description">
										<?php echo CFS()->get( '2nd_stream_course_description' ); ?>
									</div>
									<div class="continue-reading cr-float">
										<?php echo CFS()->get( '2nd_program_course_link' ); ?>

									</div>
							</div>


						</div><!-- stream class wrapper-->

<!-- 3rd course -->

<div class="stream-class-wrapper">

	<div class="animal-image">
			<img src="<?php echo CFS()->get( '3rd_animal_image' ); ?>">
	</div>

		<div class="name-description">
				<div class="class-name">
					<?php echo CFS()->get( '3rd_stream_course_title' ); ?>
				</div>

				<div class="class-description">
					<?php echo CFS()->get( '3rd_stream_course_descripton' ); ?>
				</div>
				<div class="continue-reading cr-float">
					<?php echo CFS()->get( '3rd_program_course_link' ); ?>
				</div>
		</div>


	</div><!-- stream class wrapper-->

			</section>
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
<!-- hide empty cfs images
get_field returns false if (value == “” || value == null || value == false)

<?php

if(get_field('field_name'))
{
	echo '<p>' . get_field('field_name') . '</p>';
}

?> -->
