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

			<div class="group-1-bkgd">
				<?php while ( have_posts() ) : the_post(); // this is used for first course only ?>

					<div class="page-title"> <!--_indexes.scss -->
						<?php the_title('<h2>', '</h2>' ); ?>
					</div>

					<section class="group-1-programs-wrapper">

						<!-- 1st course -->
						<div class="group-1-course-wrapper">

							<div class="hp-course-image">
								<img src="<?php echo CFS()->get( 'gr1_course1_image' ); ?>">
							</div>

							<div class="hp-course-title">
								<?php echo CFS()->get( 'gr1_course1_title' ); ?>
							</div>

							<div class="hp-course-excerpt">
								<?php the_content(); ?>
							</div>

						<?php endwhile; // End of the first program course loop. ?>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr1_course1_link' ); ?>
						</div>

					</div><!-- group-1-course-wrapper -->

					<!-- 2nd course -->

					<div class="group-1-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr1_course2_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr1_course2_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr1_course2_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr1_course2_link' ); ?>
						</div>

					</div><!-- group-1-course-wrapper -->

					<!-- 3rd course -->

					<div class="group-1-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr1_course3_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr1_course3_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr1_course3_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr1_course3_link' ); ?>
						</div>

					</div><!-- group-1-course-wrapper -->

				</section><!-- group-1-programs-wrapper -->

			</div> <!-- group-1-bkgd -->

			<!-- group 2 programs -->
			<div class="group-2-bkgd">

				<div class="page-title"> <!--_indexes.scss -->
					<h2>	<?php echo CFS()->get( 'gr2_title' ); ?></h2>
				</div>

				<section class="group-2-programs-wrapper">

					<!-- group 2 1st course -->
					<div class="group-2-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr2_course1_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr2_course1_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr2_course1_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr2_course1_link' ); ?>
						</div>

					</div><!-- group-2-course-wrapper -->

					<!-- group 2 2nd course -->

					<div class="group-2-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr2_course2_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr2_course2_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr2_course2_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr2_course2_link' ); ?>
						</div>

					</div><!-- group-2-course-wrapper -->

					<!-- group 2 3rd course -->

					<div class="group-2-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr2_course3_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr2_course3_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr2_course3_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr2_course3_link' ); ?>
						</div>

					</div><!-- group-2-course-wrapper -->

<!-- group 2 4th course -->

					<div class="group-2-course-wrapper">

						<div class="hp-course-image">
							<img src="<?php echo CFS()->get( 'gr2_course4_image' ); ?>">
						</div>

						<div class="hp-course-title">
							<?php echo CFS()->get( 'gr2_course4_title' ); ?>
						</div>

						<div class="hp-course-excerpt">
							<?php echo CFS()->get( 'gr2_course4_excerpt' ); ?>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr2_course4_link' ); ?>
						</div>

					</div><!-- group-2-course-wrapper -->

				</section><!-- group-2-programs-wrapper -->

			</div> <!-- group-2-bkgd -->

<!-- first video wrapper -->

			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video_quote' ); ?></h3>
				</div>

				<div class="video-link">
					<img src="<?php echo CFS()->get( 'video_link' ); ?>">
				</div>

			</div> <!-- end first video wrapper -->

<!-- 2nd video  wrapper -->

			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video2_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video2_quote' ); ?></h3>
				</div>

				<div class="video-link">
					<img src="<?php echo CFS()->get( 'video2_link' ); ?>">
				</div>

			</div> <!-- steetview  wrapper -->

<!-- 3rd video wrapper -->

			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video3_title' ); ?></h2>
				</div>

				<div class="video-link">
					<img src="<?php echo CFS()->get( 'video3_link' ); ?>">
				</div>

			</div> <!-- end 3rd video wrapper -->

<!-- steetview  wrapper -->

			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video4_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video4_quote' ); ?></h3>
				</div>

				<div class="video-link">
					<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1466461969251!6m8!1m7!1skVsp013Lg9oAAAQpj7HacQ!2m2!1d49.26591571548086!2d-123.243021275505!3f159.27!4f-0.18999999999999773!5f0.4000000000000002" width="1024" height="400" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
			</div> <!-- steetview  wrapper -->

<!-- newsletter wrapper -->

			<div class="newsletter-bkgd">

				<div class="newsletter-title">
					<h2>~ LMLA Newsletter ~ </h2>
				</div>

				<div class="newsletter-form">
				<?php echo CFS()->get( 'newsletter_form' ); ?>
				</div>

		</div> <!-- newsletter  wrapper -->




	</article> <!-- #post-## -->

</main> <!-- #main -->

</div> <!-- #primary -->

<?php get_footer(); ?>
