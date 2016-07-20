<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

?>
<?php global $first_post; ?>

<div class="blog-wrapper-single">
<article id="post-<?php the_ID(); ?>">
			<div class="blog-image">
				<?php
				if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail(); ?>
				<?php } ?>
			</div>

				<div class="blog-title">
						<?php the_title('<h2>', '</h2>' ); ?>
				</div>
			<div class="blog-content">

					<div class="blog-excerpt">
						<?php the_content(); ?>
					</div>
			</div>
</article><!-- #post-## -->
</div><!-- blog-wrapper-->
