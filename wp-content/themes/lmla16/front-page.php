<?php
/**
* Template Name: Front Page
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Lmla16
*
*/

get_header(); ?>

<div id="primary" class="content-area">

<main id="main" class="site-main" role="main">
	<?php putRevSlider('homepage', 'homepage'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section> <!-- group 1 section -->

				<?php while ( have_posts() ) : the_post(); // this is used for first course only ?>

					<div class="page-title"> <!--_indexes.scss Core Programs -->
						<?php the_title('<h1>', '</h1>' ); ?>
					</div>

					<div class="group-1-programs-wrapper">

						<!-- 1st course -->
						<div class="group-course-wrapper">

							<div class="hp-course-image">
								<img src="<?php echo CFS()->get( 'gr1_course1_image' ); ?>">
							</div>

							<div class="hp-course-title">
								<?php echo CFS()->get( 'gr1_course1_title' ); ?>
							</div>

							<div class="hp-course-excerpt">
								<?php the_content(); // this is used for first course only ?>
							</div>

						<?php endwhile; // End of the first program course loop. ?>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr1_course1_link' ); ?>
						</div>

					</div><!-- group-1-course-wrapper -->

					<!-- 2nd course -->

					<div class="group-course-wrapper">

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

					<div class="group-course-wrapper">

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

				</div><!-- group-1-programs-wrapper -->

			</section> <!-- group 1 section -->

			<!-- group 2 programs -->
			<section class="group-2-bkgd">

				<div class="page-title"> <!--_indexes.scss specialty -->
					<h2>	<?php echo CFS()->get( 'gr2_title' ); ?></h2>
				</div>

				<div class="group-2-programs-wrapper">

					<!-- group 2 1st course -->
					<div class="group-course-wrapper">

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

					<div class="group-course-wrapper">

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

					<div class="group-course-wrapper">

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

					<div class="group-course-wrapper">

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

				</div><!-- group-2-programs-wrapper -->

			</section> <!-- group-2-bkgd -->

<!-- first video wrapper lmla difference -->

			<div class="video-wrapper">

				<div class="page-title"> <!-- lmla difference -->
					<h2><?php echo CFS()->get( 'video_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video_quote' ); ?></h3>
				</div>

				<div class="video-image">
					<?php echo CFS()->get( 'video_content' ); ?>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video_quote2' ); ?></h3>
				</div>

				<div class="topic-button">
					<?php echo CFS()->get( 'video_link' ); ?>
				</div>

			</div> <!-- end first video wrapper lmla difference -->

<!-- 2nd video  wrapper -->
<div class="video-3-bkgd">
			<div class="video-wrapper">

				<div class="page-title"> <!-- student testimonials -->
					<h2><?php echo CFS()->get( 'video2_title' ); ?></h2>
				</div>

				<div class="video-image">
					<?php echo CFS()->get( 'video2_content' ); ?>
				</div>

			</div> <!-- end 2nd video wrapper -->
		</div>

<!-- 1st single section wrapper -->

			<div class="single-wrapper">

				<div class="page-title"> <!-- teachers -->
					<h2><?php echo CFS()->get( 'single1_title' ); ?></h2>
				</div>

				<div class="hp-course-excerpt">
					<?php echo CFS()->get( 'single1_description' ); ?>
				</div>

				<div class="video-image">
					<img src="<?php echo CFS()->get( 'single1_image' ); ?>">
				</div>

				<div class="topic-button">
					<span><?php echo CFS()->get( 'single1_link' ); ?></span>
				</div>

			</div> <!-- end 1st single section wrapper -->


			<div class="single-wrapper"> <!-- steetview  wrapper -->

				<div class="page-title">
					<h2><?php echo CFS()->get( 'single2_title' ); ?></h2>
				</div>

				<div class="content-container embed-container maps">
					<iframe style="pointer-events: none; border: 0;" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1469174012575!6m8!1m7!1shNhbQZx4u3IAAAQpjNnaGg!2m2!1d49.26589809285828!2d-123.2430078394774!3f155.01388625592418!4f1.013222748815167!5f0.4000000000000002" width="828" height="466" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>

			</div> <!-- end steetview  wrapper -->

<!-- newsletter wrapper -->
			<div class="newsletter-bkgd">
				<div class="page-title">
					<h2><?php echo CFS()->get( 'newsletter_title' ); ?></h2>
				</div>

				<div class="newsletter-form">
				<?php echo CFS()->get( 'newsletter_form' ); ?>
				</div>

		</div> <!-- end newsletter wrapper -->

		<div class="page-title"> <!--_indexes.scss -->
			<h2><?php echo CFS()->get( 'latest_blog_title' ); ?></h2>
		</div>

		<section class="hp-blog-wrapper">

			<div class="hp-blog-post">

					<!-- Define our WP Query Parameters (2 posts on homepage) -->
					<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>

					<!-- Start our WP Query -->
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<ul>
						<li>
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="topic-image">
											<?php the_post_thumbnail( 'lmla-blog-pic'); ?>
										</div>
									<?php endif; ?>


									<div class="hp-course-title"> <!--_indexes.scss -->
										<?php the_title(); ?>
									</div>

									<!-- Display the Post Excerpt -->
									<div class="hp-course-excerpt">
										<?php
										the_excerpt();
										?>
									</div>

									<div class="more-info-homepage">
										<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
											<?php
											printf(
											/* Translators: %s = Name of the current post. */
											wp_kses( __( 'Read on %s', 'lmla16' ), array( 'span' => array( 'class' => array() ) ) ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										);
										?>
									</a>
								</div>
						</li>
	</ul>

					<!-- Repeat the process and reset once it hits the limit -->
					<?php
				endwhile;
				wp_reset_postdata();
				?>

	</div><!-- end of hp-blog-post-->
</section>

</article> <!-- #post-## -->

	</main><!-- #main -->

</div> <!-- #primary -->

<?php get_footer(); ?>
