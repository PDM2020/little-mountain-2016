<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

?>

<section class="<?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> not-found">
	<div class="search-wrapper">
	<header class="page-header">
		<h2 class="page-title">
			<?php
			if ( is_404() ) { esc_html_e( 'Page not available', 'lmla16' );
			} else if ( is_search() ) {
				/* translators: %s = search query */
				printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'lmla16'), '<em>' . get_search_query() . '</em>' );
			} else {
				esc_html_e( 'Nothing Found', 'lmla16' );
			}
			?>
		</h2>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'lmla16' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lmla16' ); ?></p>
			<?php get_search_form(); ?>

		<?php elseif ( is_404() ) : ?>

			<p><?php esc_html_e( 'You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'lmla16' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lmla16' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->


		<h2 class="page-title secondary-title"><?php esc_html_e( 'Little Mountain Learning Academy', 'lmla16' ); ?></h2>

		<ul class="animal-image-404">
			<li class="animal-image-b"><img src="/wp-content/uploads/butterfly.png"alt="Little Mountain Learning Academy Butterfly" /></li>
			<li class="animal-image-b"><img src="/wp-content/uploads/fish.png"alt="Little Mountain Learning Academy Fish" /></li>
			<li class="animal-image-b"><img src="/wp-content/uploads/rabit.png"alt="Little Mountain Learning Academy Hare" /></li>
			<li class="animal-image-b"><img src="/wp-content/uploads/deer.png"alt="Little Mountain Learning Academy Deer" /></li>
			<li class="animal-image-b"><img src="/wp-content/uploads/rooster.png"alt="Little Mountain Learning Academy Rooster" /></li>
		</ul>


</div>
</section><!-- .no-results -->
