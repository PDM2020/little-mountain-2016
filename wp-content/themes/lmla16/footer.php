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
			<?php if(ICL_LANGUAGE_CODE=='en'): ?>
				<h2>Contact Information</h2>
				<p>Phone:&nbsp;<a href="tel:604-221-2363">604-221-2363</a><br/>
				Address: Suite 213 - 2150 Western Parkway, Vancouver British Columbia, Canada, V6T 1V6</p>
			<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
				<h2>联络我们</h2>
				<p>电话号码:&nbsp;<a href="tel:604-221-2363">604-221-2363</a><br/>
				地址: Suite 213 - 2150 Western Parkway, Vancouver British Columbia, Canada, V6T 1V6</p>
			<?php endif;?>

		</div>

		<div class="lmla-social">

			<?php if(ICL_LANGUAGE_CODE=='en'): ?>
				<h2>Follow us on social media</h2>
			<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
				<h2>关注我们</h2>
			<?php endif;?>

			<ul>
				<li><a href="https://www.facebook.com/LittleMountainLearningAcademy/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://soundcloud.com/lmacademics"><i class="fa fa-soundcloud"></i></a></li>
				<li><a href="https://www.youtube.com/user/LMLAmedia"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>

<div class="lang-pref-footer-wrapper">

				<div>
				<?php if(ICL_LANGUAGE_CODE=='en'): ?>
					<h2>Language Preferences</h2>
				<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
					<h2>语言偏好设定</h2>
				<?php endif;?>
				</div>

				<div id="language_list_footer" >
					<?php language_selector_footer(); ?>
				</div>

</div>

</div> <!--.footer-wrapper -->



		<div class="site-info">
			<!-- -->
			<?php if(ICL_LANGUAGE_CODE=='en'): ?>
				<?php printf( esc_html( 'Copyright &copy;'),'lmla16'); ?> <?php _e(date('Y')); ?>	<span>&bull;</span> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php printf( esc_html( 'Little Mountain Learning Academy' ), 'lmla16' ); ?></a> <span>&bull;</span> <a href="<?php echo esc_url( '/wp-admin/' ); ?>"><?php printf( esc_html( 'Login' ), 'lmla16' ); ?></a>
			<?php elseif(ICL_LANGUAGE_CODE=='zh-hans'): ?>
				<?php printf( esc_html( '版权所有 &copy;'),'lmla16'); ?> <?php _e(date('Y')); ?>	<span>&bull;</span> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php printf( esc_html( ' 小山学校' ), 'lmla16' ); ?></a> <span>&bull;</span> <a href="<?php echo esc_url( '/wp-admin/' ); ?>"><?php printf( esc_html( '登入' ), 'lmla16' ); ?></a><?php endif;?>
			<!-- -->
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
