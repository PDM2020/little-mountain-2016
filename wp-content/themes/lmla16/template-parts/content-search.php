<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package LMLA2016_Theme
*/

?>

<li class="blog-wrapper">
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
						<?php the_excerpt(); ?>
					</div>

					<div id="blog-button">
							<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
								<?php printf(
								/* Translators: %s = Name of the current post. */
								wp_kses( __( 'Read On %s', 'lmla16' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
								); ?>
							</a>
					</div>

			</div>
</article><!-- #post-## -->
<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lmla16' ); ?></p>

</li><!-- blog-wrapper-->
