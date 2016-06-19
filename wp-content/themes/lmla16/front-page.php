<?php
/**
<<<<<<< HEAD
 * The template for displaying all pages.
=======
 * Template Name: Home Page
>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php putRevSlider('homepage', 'homepage'); ?>
		<main id="main" class="site-main" role="main">

<<<<<<< HEAD
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
=======
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php while ( have_posts() ) : the_post(); // this is used for first course only ?>

	<div class="page-title"> <!--_indexes.scss -->
		<?php the_title('<h2>', '</h2>' ); ?>
	</div>

	<section class="group-1-programs-wrapper">

<!-- 1st course -->
					<div class="group-1-course-wrapper">

						<div class="hp-course-image">
											<img src="<?php echo CFS()->get( 'gr_1_course_1_image' ); ?>">
												</div>

												<div class="hp-course-title">
													<?php echo CFS()->get( 'gr1_course1_title' ); ?>
														</div>

										<div class="hp-course-excerpt">
											<?php the_content(); ?>
										</div>

									<?php endwhile; // End of the first program course loop. ?>

									<div class="more-info-homepage">
								<?php echo CFS()->get( 'gr_1_course_1_link' ); ?>
							</div>

						</div><!-- group-1-course-wrapper -->

<!-- 2nd course -->

<div class="group-1-course-wrapper">

	<div class="hp-course-image">
		<img src="<?php echo CFS()->get( 'gr_1_course_2_image' ); ?>">
			</div>

		<div class="hp-course-title">
			<?php echo CFS()->get( 'gr_1_course_2_title' ); ?>
				</div>

					<div class="hp-course-excerpt">
						<?php echo CFS()->get( 'gr_1_course_2_excerpt' ); ?>
					</div>

				<div class="more-info-homepage">
			<?php echo CFS()->get( 'gr_1_course_2_link' ); ?>
		</div>

	</div><!-- group-1-course-wrapper -->

	<!-- 3rd course -->

	<div class="group-1-course-wrapper">

		<div class="hp-course-image">
			<img src="<?php echo CFS()->get( 'gr_1_course_3_image' ); ?>">
				</div>

			<div class="hp-course-title">
				<?php echo CFS()->get( 'gr_1_course_3_title' ); ?>
					</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr_1_course_3_excerpt' ); ?>
						</div>

					<div class="more-info-homepage">
				<?php echo CFS()->get( 'gr_1_course_3_link' ); ?>
			</div>

		</div><!-- group-1-course-wrapper -->

	</section><!-- group-1-programs-wrapper -->

</article><!-- #post-## -->

	</main><!-- #main -->
>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700
		<div>

		</div>
	</div><!-- #primary -->

<<<<<<< HEAD
=======
<?php get_sidebar(); ?>
>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700
<?php get_footer(); ?>
