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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail() ) : ?>
				<div class="programs-header-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php endif; ?>


				<section class="program-courses-wrapper" >

			<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-header">
					<?php the_title('<h1 class="program-title">', '</h1>' ); ?>
				</div><!-- .entry-header -->

<!-- 1st course -->

<style> .program-overview-btn-1 a {color: <?php echo CFS()->get('button_text_color'); ?>;} </style>
<style> .program-overview-btn-1 {background: <?php echo CFS()->get('bkgd_color'); ?>;} </style>

					<div class="program-wrapper lmla-hidden">

						<div class="course-description">
							<?php the_content(); ?>
							</div>

							<div class="program-overview-btn program-overview-btn-1">
								<?php echo CFS()->get( 'program_link' ); ?>
							</div>

							<div class="animal-image">
									<img src="<?php echo CFS()->get( 'animal_image' ); ?>">
							</div>

					</div><!-- program wrapper-->

<!-- 2nd course -->
<style> .program-overview-btn-2 a {color: <?php echo CFS()->get('2nd_button_text_color'); ?>;} </style>
<style> .program-overview-btn-2 {background: <?php echo CFS()->get('2nd_bkgd_color'); ?>;} </style>

					<div class="program-wrapper lmla-hidden">

						<div class="course-description">
									<p><?php echo CFS()->get( '2nd_overview' ); ?></p>
							</div>

							<div class="program-overview-btn program-overview-btn-2">
								<?php echo CFS()->get( '2nd_program_link' ); ?>
							</div>

							<div class="animal-image">
									<img src="<?php echo CFS()->get( '2nd_animal_image' ); ?>">
							</div>

					</div><!-- program wrapper-->

<!-- 3rd course -->

<style> .program-overview-btn-3 a {color: <?php echo CFS()->get('3rd_button_text_color'); ?>;} </style>
<style> .program-overview-btn-3 {background: <?php echo CFS()->get('3rd_bkgd_color'); ?>;} </style>

					<div class="program-wrapper lmla-hidden">

							<div class="course-description">
									<p><?php echo CFS()->get( '3rd_overview' ); ?></p>
							</div>

							<div class="program-overview-btn program-overview-btn-3">
								<?php echo CFS()->get( '3rd_program_link' ); ?>
							</div>

							<ul class="animal-image-row">
								<li class="animal-image-b"><img src="<?php echo CFS()->get( '1st_b_animal_image' ); ?>"></li>
								<li class="animal-image-b"><img src="<?php echo CFS()->get( '2nd_b_animal_image' ); ?>"></li>
								<li class="animal-image-b"><img src="<?php echo CFS()->get( '3rd_animal_image' ); ?>"></li>
							</ul>

					</div><!-- program wrapper-->

						<?php endwhile; // End of the loop. ?>

					</section>

			</article><!-- #post-## -->

		</main><!-- #main -->

	</div><!-- #primary -->


<?php get_footer(); ?>
