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

          <div class="animal-logo">
              <img src="<?php echo CFS()->get( 'animal_logo' ); ?>">
          </div>

          <p><?php echo CFS()->get('age_range'); ?></p>
				</div><!-- .entry-header -->

				<div class="entry-content index-excerpt">

					<?php the_content(); ?>

				</div><!-- .entry-content -->

        <section class="course-overview-wrapper">

          <div class="course-wrapper">

            <h2>Learning Objectives</h2>

              <div class="objective-one">
                <?php echo CFS()->get( 'first_objective_image' ); ?>
                <p><?php echo CFS()->get('first_objective_text');?></p>
              </div>

              <div class="objective-two">
                <?php echo CFS()->get( 'second_objective_image' ); ?>
                <p><?php echo CFS()->get('second_objective_text');?></p>
              </div>

              <div class="objective-three">
                <?php echo CFS()->get( 'third_objective_image' ); ?>
                <p><?php echo CFS()->get('third_objective_text');?></p>
              </div>

              <div class="objective-four">
                <?php echo CFS()->get( 'fourth_objective_image' ); ?>
                <p><?php echo CFS()->get('fourth_objective_text');?></p>
              </div>

            </div><!-- course wrapper-->

        </section>

        <section class="teacher-profiles">
          <div class="teacher-profiles-header">
            <h2>Teachers' Profile</h2>
            <p>(Tap to view teacher bio)</p>
          </div>

          <div class="single-teacher">
            <?php echo CFS()->get( 'teacher_profile_image' ); ?>
            <p><?php echo CFS()->get( 'teacher_name' ); ?></p>
          </div>

          <div class="single-teacher">
            <?php echo CFS()->get( 'teacher_profile_image' ); ?>
            <p><?php echo CFS()->get( 'teacher_name' ); ?></p>
          </div>

          <div class="single-teacher">
            <?php echo CFS()->get( 'teacher_profile_image' ); ?>
            <p><?php echo CFS()->get( 'teacher_name' ); ?></p>
          </div>

        </section>

        <section class="student-projects">

          <h2>Student Projects</h2>

          <div class="projects-description">
						<?php echo CFS()->get('design_cycle'); ?>
					</div>

          <div class="single-project-wrapper">
						<?php echo CFS()->get('project_title'); ?>

						<?php echo CFS()->get('project_video'); ?>
					</div>

        </section>

			</article> <!-- #post-## -->



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
