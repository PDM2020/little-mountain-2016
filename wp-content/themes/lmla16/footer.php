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
		<?php printf( esc_html( 'Copyright &copy; 2016'),'lmla16'); ?><span>&bull;</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php printf( esc_html( 'Little Mountain Learning Academy 2016' ), 'lmla16' ); ?></a><span>&bull;</span><a href="<?php echo esc_url( '/wp-admin/' ); ?>"><?php printf( esc_html( 'Login' ), 'lmla16' ); ?></a>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
