<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lmla16
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lmla16' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lmla16' ), 'WordPress' ); ?></a>

			<span class="sep"> | </span>

			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'lmla16' ), 'lmla16', '<a href="http://peacockdigitalmedia.com/" rel="designer">Peacock Digital Media</a>' ); ?>

			<span class="sep"> | </span>

			<?php printf( esc_html__( ' %1$s: %2$s', 'lmla16' ), 'Admin', '<a href="/wp-admin/" > Login</a>' ); ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
