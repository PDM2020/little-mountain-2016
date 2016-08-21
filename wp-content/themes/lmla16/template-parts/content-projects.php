<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package LMLA2016_Theme
*/

?>
<li class="blog-wrapper-single">
<article id="post-<?php the_ID(); ?>">

				<?php
				if ( has_post_thumbnail() ) { ?>
					<div class="project-image">
						<?php the_post_thumbnail(); ?>
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
</li><!-- blog-wrapper-->
