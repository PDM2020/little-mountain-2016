<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lmla16
 */

get_header(); ?>


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


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
				</article><!-- #post-## -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
