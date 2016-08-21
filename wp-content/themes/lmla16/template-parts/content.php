<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package LMLA2016_Theme
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<?php
		if ( has_post_thumbnail() ) { ?>
			<div class="project-image">
				<?php the_post_thumbnail('lmla-blog-pic'); ?>
			</div>
		<?php } ?>


		<div class="blog-title">
				<?php the_title('<h2>', '</h2>' ); ?>
		</div>
	<div class="blog-content">

			<div class="blog-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<div class="continue-reading">

				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php
						printf(
							/* Translators: %s = Name of the current post. */
							wp_kses( __( 'Continue reading %s', 'lmla16' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						);
					?>
				</a>
			</div>

	</div>


</article><!-- #post-## -->
