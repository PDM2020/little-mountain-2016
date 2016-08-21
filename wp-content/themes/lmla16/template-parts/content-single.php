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

				<?php
				if ( has_post_thumbnail() ) { ?>
					<div class="blog-image">
						<?php the_post_thumbnail('lmla-blog-pic'); ?>
					</div>
				<?php } ?>
				
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
