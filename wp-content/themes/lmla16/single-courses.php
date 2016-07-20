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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="courses-header-image"><?php the_post_thumbnail( 'large' ); ?></div>
			<?php endif; ?>

			<section class="section-wrapper-description">
				<div class="entry-header">

					<div class="animal-logo">
              <img src="<?php echo CFS()->get( 'animal_logo' ); ?>">
          </div>

					<div class="header-text">
						<?php the_title('<h2 class="course-title">', '</h2>' ); ?>

	          <h3 class="age-range"><?php echo CFS()->get('age_range'); ?></h3>
					</div>

				</div><!-- .entry-header -->

				<div class="course-description">

					<?php the_content(); ?>

				</div><!-- .entry-content -->

				<div class="fish-course-youth-part lmla-hidden">
					<div class="special-header">

						<div class="courses-header-image"><img src="<?php echo CFS()->get( 'second_program_image' ); ?>"></div>


						<div class="entry-header">
							<div class="animal-logo">
		              <img src="<?php echo CFS()->get( 'second_logo' ); ?>">
		          </div>

							<div class="header-text">
								<h2 class="course-title"><?php echo CFS()->get('second_title'); ?></h2>

			          <h3 class="age-range"><?php echo CFS()->get('second_age_range'); ?></h3>
							</div>
						</div>

					</div>

					<div class="course-description"><?php echo CFS()->get('second_program_description'); ?></div>

				</div>
				</section>

				<section class="section-wrapper-additional lmla-hidden">
					<div class="additional-block">
						<div class="courses-header-image-additional"><img src="<?php echo CFS()->get('first_additional_details_image'); ?>"></div>
						<div class="additional-info-wrapper">
							<h2 class="section-title"><?php echo CFS()->get('first_additional_details_title'); ?></h2>
							<div class="course-description"><?php echo CFS()->get('first_additional_details_text'); ?></div>
						</div>
					</div>

					<div class="additional-block">
						<div class="courses-header-image-additional"><img src="<?php echo CFS()->get('second_additional_details_image'); ?>"></div>
						<div class="additional-info-wrapper">
							<h2 class="section-title"><?php echo CFS()->get('second_additional_details_title'); ?></h2>
							<div class="course-description"><?php echo CFS()->get('second_additional_details_text'); ?></div>
						</div>
					</div>
				</section>

        <section class="section-wrapper-objectives lmla-hidden">

          <div class="course-wrapper">

            <h2 class="section-title lmla-hidden"><?php echo CFS()->get('course_details_title_obj'); ?></h2>

						<div class="objectives-wrapper">

              <div class="objectives lmla-hidden">
								<h2 class="up-titles lmla-hidden"><?php echo CFS()->get('first_optional_title'); ?></h2>
                <div class="objective-img-wrapper"><img src="<?php echo CFS()->get( 'first_objective_image' ); ?>"></div>
                <?php echo CFS()->get('first_objective_text');?>
              </div>

              <div class="objectives lmla-hidden">
								<h2 class="up-titles lmla-hidden"><?php echo CFS()->get('second_optional_title'); ?></h2>
                <div class="objective-img-wrapper"><img src="<?php echo CFS()->get( 'second_objective_image' ); ?>"></div>
                <?php echo CFS()->get('second_objective_text');?>
              </div>

              <div class="objectives lmla-hidden">
								<h2 class="up-titles lmla-hidden"><?php echo CFS()->get('third_optional_title'); ?></h2>
                <div class="objective-img-wrapper"><img src="<?php echo CFS()->get( 'third_objective_image' ); ?>"></div>
                <?php echo CFS()->get('third_objective_text');?>
              </div>

              <div class="objectives lmla-hidden">
                <div class="objective-img-wrapper"><img src="<?php echo CFS()->get( 'fourth_objective_image' ); ?>"></div>
                <?php echo CFS()->get('fourth_objective_text');?>
              </div>
						</div>

				<!-- course wrapper-->
        </section>

        <section class="section-wrapper-teachers">
          <div class="teacher-profiles-header">
            <h2 class="section-title-teacher lmla-hidden"><?php echo CFS()->get('course_details_title_teacher'); ?></h2>
            <p class="section-subhead">(Tap to view teacher bio)</p>
          </div>

					<div class="teachers-wrapper">
	          <div class="single-teacher lmla-hidden">
	          <div class="teacher-profile-pic"><img src="<?php echo CFS()->get( 'teacher_profile_image' ); ?>" ></div>
	          	<?php echo CFS()->get('teacher_profile_link'); ?>
	          </div>

	          <div class="single-teacher lmla-hidden">
	            <div class="teacher-profile-pic"><img src="<?php echo CFS()->get( 'second_teacher_profile_image' ); ?>" ></div>
	            <?php echo CFS()->get('second_teacher_profile_link'); ?>
	          </div>

	          <div class="single-teacher lmla-hidden">
	            <div class="teacher-profile-pic"><img src="<?php echo CFS()->get( 'third_teacher_profile_image' ); ?>" ></div>
	            <?php echo CFS()->get('third_teacher_profile_link'); ?>
	          </div>
					</div>

        </section>

        <section class="section-wrapper-projects lmla-hidden">

          <h2 class="section-title lmla-hidden"><?php echo CFS()->get('course_details_title_project'); ?></h2>

          <div class="projects-description lmla-hidden">
						<?php echo CFS()->get('design_cycle'); ?>
					</div>

          <div class="single-project-wrapper lmla-hidden">
						<p class="project-title lmla-hiiden"><?php echo CFS()->get('project_title'); ?></p>

						<div class="project-image lmla-hidden"><img src="<?php echo CFS()->get('project_image'); ?>"></div>

						<style> .project-link-btn a {color: <?php echo CFS()->get('link_text_colour'); ?>;} </style>
						<style> .project-link-btn {background: <?php echo CFS()->get('project_link_colour'); ?>;} </style>

						<div class="project-link-btn lmla"><?php echo CFS()->get('projects_link'); ?></div>

					</div>

        </section>

				<section class="section-wrapper-assessment lmla-hidden">
					<h2 class="section-title lmla-hidden"><?php echo CFS()->get('course_details_title_assessment'); ?></h2>

					<div class="assessment-video">
						<img src="<?php echo CFS()->get('assessment_video'); ?>">
					</div>

					<div class="assessment-description">
						<?php echo CFS()->get('assessment_description'); ?>
					</div>
				</section>

				<section class="section-wrapper-form lmla-hidden">
					<style> .download-link-btn a {color: <?php echo CFS()->get('download_text_colour'); ?>;} </style>
					<style> .download-link-btn {background: <?php echo CFS()->get('download_link_colour'); ?>;} </style>

					<div class="download-link-btn lmla-hidden"><?php echo CFS()->get('download_link'); ?></div>

					<div class="form-wrapper lmla-hidden">
						<h2 class="section-title lmla-hidden"><?php echo CFS()->get('request_title'); ?></h2>

						<div class="request-form lmla-hidden">
							<?php echo CFS()->get('request_form'); ?>
						</div>
					</div>

				</section>

			</article> <!-- #post-## -->



		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
