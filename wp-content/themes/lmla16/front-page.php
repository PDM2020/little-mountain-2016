<?php
/**
 * Template Name: Home Page
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
		<div>

		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
