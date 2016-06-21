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

<div class="footer-wrapper">

		<div class="contact-info">
				<h2>Contact Information</h2>
				<p>Phone: 604-221-2363<br/>
				Address: Suite 213 - 2150 Western Parkway, Vancouver British Columbia, Canada, V6T 1W6</p>
		</div>

		<div class="lmla-social">
			<h2>Follow us on social media</h2>
			<ul>
				<li><i class="fa fa-facebook"></i></li>
				<li><i class="fa fa-soundcloud"></i></li>
				<li><i class="fa fa-youtube"></i></li>
			</ul>
		</div>

		<div class="lang-pref">
			<h2>Language Preferneces</h2>
			<button class="ca-btn">English</button>
			<button class="zh-han-btn">Chinese</button>
		</div>

</div> <!--.footer-wrapper -->

		<div class="site-info">
		<?php printf( esc_html( 'Copyright &copy;'),'lmla16'); ?> <?php _e(date('Y')); ?><span>&bull;</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php printf( esc_html( 'Little Mountain Learning Academy 2016' ), 'lmla16' ); ?></a><span>&bull;</span><a href="<?php echo esc_url( '/wp-admin/' ); ?>"><?php printf( esc_html( 'Login' ), 'lmla16' ); ?></a>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
