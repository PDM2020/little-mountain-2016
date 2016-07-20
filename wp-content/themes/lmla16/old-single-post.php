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
			
			<div class="blog-title">
					<?php if(ICL_LANGUAGE_CODE=='en'): ?>
						<h2>LMLA Education Blog</h2>
					<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
						<h2>LMLA Education Blog(CH)</h2>
					<?php endif;?>
			</div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'lmla16' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'lmla16' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'lmla16' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'lmla16' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div> <!-- #primary -->

<?php get_footer(); ?>
