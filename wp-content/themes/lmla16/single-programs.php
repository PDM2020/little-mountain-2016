<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lmla16
 */

get_header(); ?>

<<<<<<< HEAD
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
=======

	<div id="primary" class="content-area program-space">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail() ) : ?>

	<section class="program-courses-wrapper" >

					<div class="programs-header-image"><?php the_post_thumbnail( 'large' ); ?></div>


			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

		<main id="main" class="site-main" role="main">

<div class="entry-header">
					<?php the_title('<h2 class="program-title">', '</h2>' ); ?>
				</div><!-- .entry-header -->



<!-- 1st course -->

<style> .program-overview-btn-1 a {color: <?php echo CFS()->get('1_button_text_color'); ?>;} </style>
<style> .program-overview-btn-1 {background: <?php echo CFS()->get('bkgd_color'); ?>;} </style>

					<div class="program-wrapper">

						<div class="course-description">
								<?php the_content(); ?>
							</div>

							<div class="program-overview-btn program-overview-btn-1">
								<?php echo CFS()->get( 'program_course_link' ); ?>
							</div>

							<div class="animal-image">
									<img src="<?php echo CFS()->get( 'animal_image' ); ?>">
							</div>

					</div><!-- program wrapper-->

<!-- 2nd course -->
<style> .program-overview-btn-2 a {color: <?php echo CFS()->get('2_button_text_color'); ?>;} </style>
<style> .program-overview-btn-2 {background: <?php echo CFS()->get('2_bkgd_color'); ?>;} </style>

					<div class="program-wrapper">

						<div class="course-description">
									<?php echo CFS()->get( '2nd_overview_area' ); ?>
							</div>

							<div class="program-overview-btn program-overview-btn-2">
								<?php echo CFS()->get( '2nd_program_course_link' ); ?>
							</div>

							<div class="animal-image">
									<img src="<?php echo CFS()->get( '2nd_animal_image' ); ?>">
							</div>

					</div><!-- program wrapper-->

<!-- 3rd course -->

<style> .program-overview-btn-3 a {color: <?php echo CFS()->get('3_button_text_color'); ?>;} </style>
<style> .program-overview-btn-3 {background: <?php echo CFS()->get('3_bkgd_color'); ?>;} </style>

					<div class="program-wrapper">

							<div class="course-description">
									<?php echo CFS()->get( '3rd_overview_area' ); ?>
							</div>

							<div class="program-overview-btn program-overview-btn-3">
								<?php echo CFS()->get( '3rd_program_course_link' ); ?>
							</div>

							<div class="animal-image">
									<img src="<?php echo CFS()->get( '3rd_animal_image' ); ?>">
							</div>

					</div><!-- program wrapper-->

			</section>

>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
<<<<<<< HEAD
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
=======
				</article><!-- #post-## -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700
