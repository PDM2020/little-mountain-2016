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
*
* The template for displaying all pages.
 * Template Name: Home Page
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

<main id="main" class="site-main" role="main">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section> <!-- group 1 section -->

				<?php while ( have_posts() ) : the_post(); // this is used for first course only ?>

					<div class="page-title"> <!--_indexes.scss Core Programs -->
						<?php the_title('<h2>', '</h2>' ); ?>
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
						<p><?php echo CFS()->get( 'gr1_course2_excerpt' ); ?></p>
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
					<p><?php echo CFS()->get( 'gr1_course3_excerpt' ); ?></p>
						</div>

						<div class="more-info-homepage">
							<?php echo CFS()->get( 'gr1_course3_link' ); ?>
						</div>

					</div><!-- group-1-course-wrapper -->

				</div><!-- group-1-programs-wrapper -->

			</section> <!-- group 1 section -->

			<!-- group 2 programs -->
			<section class="group-2-bkgd">

				<div class="page-title"> <!--_indexes.scss -->
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

<!-- first video wrapper -->

			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video_quote' ); ?></h3>
				</div>

				<div class="video-image">
					<img src="<?php echo CFS()->get( 'video_image' ); ?>">
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video_quote2' ); ?></h3>
				</div>

				<div class="topic-button">
					<?php echo CFS()->get( 'video1_button' ); ?>
				</div>

			</div> <!-- end first video wrapper -->

<!-- 2nd video  wrapper -->
<div class="video-3-bkgd">
			<div class="video-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'video2_title' ); ?></h2>
				</div>

				<div class="video-quote">
					<h3><?php echo CFS()->get( 'video2_quote' ); ?></h3>
				</div>

				<div class="video-image">
					<img src="<?php echo CFS()->get( 'video2_image' ); ?>">
				</div>

			</div> <!-- 2nd video wrapper -->
		</div>

<!-- 1st single section wrapper -->

			<div class="single-wrapper">

				<div class="video-title">
					<h2><?php echo CFS()->get( 'single1_title' ); ?></h2>
				</div>

				<div class="hp-course-excerpt">
					<?php echo CFS()->get( 'single1_description' ); ?>
				</div>

				<div class="video-image">
					<img src="<?php echo CFS()->get( 'single1_image' ); ?>">
				</div>

				<div class="topic-button">
					<span><?php echo CFS()->get( 'single1_button' ); ?></span>
				</div>

			</div> <!-- end 1st single section wrapper -->


			<div class="single-wrapper"> <!-- steetview  wrapper -->

				<div class="video-title">
					<h2><?php echo CFS()->get( 'single2_title' ); ?></h2>
				</div>

				<div class="video-image">
					<a href="<?php echo CFS()->get( 'single2_link' ); ?>"><img src="<?php echo CFS()->get( 'single2_image' ); ?>"></a>
				</div>

			</div> <!-- end steetview  wrapper -->

<!-- newsletter wrapper -->
			<div class="newsletter-bkgd">

				<div class="newsletter-title">
					<h2>~ LMLA Newsletter ~ </h2>
				</div>

				<div class="newsletter-form">
				<?php echo CFS()->get( 'newsletter_form' ); ?>
				</div>

		</div> <!-- end newsletter wrapper -->

		<div class="latest-blog-title"> <!--_indexes.scss -->
			<h2>~ Latest Blog ~</h2>
		</div>

		<section class="hp-blog-wrapper">

			<div class="hp-blog-post">

					<!-- Define our WP Query Parameters -->
					<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>

					<!-- Start our WP Query -->
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<ul>
						<li>
								<div class="topic-image">
									<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>
								</div>

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
											wp_kses( __( 'Read on %s', 'Lmla16' ), array( 'span' => array( 'class' => array() ) ) ),
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
