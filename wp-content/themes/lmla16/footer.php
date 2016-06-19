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

<<<<<<< HEAD
		<div class="contact-info">
					<ul><span>Contact info:</span>
						<li>Phone:604-221-2363</li>
					</ul>
					<ul><span>Address:</span>
						<li>2150 Western Parkway,</li>
						<li>Vancouver BC V6T 1W6</li>
					</ul>
		</div><!-- .contact-info -->

		<div class="lang-pref">
					<ul><span>Language Preference:</span>
						<li>English</li>
						<li>Chinese</li>
					</ul>

					<ul><span>Admin</span>
						<li><a href="/wp-admin/">Login</a></li>
					</ul>
		</div>
=======
		<div class="site-info">
		<?php printf( esc_html( 'Copyright &copy; 2016'),'lmla16'); ?><span>&bull;</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php printf( esc_html( 'Little Mountain Learning Academy 2016' ), 'lmla16' ); ?></a><span>&bull;</span><a href="<?php echo esc_url( '/wp-admin/' ); ?>"><?php printf( esc_html( 'Login' ), 'lmla16' ); ?></a>
		</div><!-- .site-info -->
>>>>>>> f9845b96cde3763cba43b6f44eabb94302e27700

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
