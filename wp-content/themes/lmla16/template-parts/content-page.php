<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lmla16
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div><?php the_title( '<h2 class="entry-title lmla-hidden">', '</h2>' ); ?></div>

		<?php
		if ( has_post_thumbnail() ) { ?>
			<div class="featured-image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php }
		?>


	</header><!-- .entry-header -->

	<div class="text-wrapper-special">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<section class="additional-content lmla-hidden">
		<h2 class="section-title"><?php echo CFS()->get('mission_title_one'); ?></h2>


		<div class="text-wrapper"><?php echo CFS()->get('mission_text_one'); ?></div>

		<style> .partner-link-btn a {color: <?php echo CFS()->get('partner_text_color'); ?>;} </style>
		<style> .partner-link-btn {background: <?php echo CFS()->get('partner_link_color'); ?>;} </style>
		<div class="partner-link-btn"><?php echo CFS()->get('partner_link_one'); ?></div>
	</section>

	<section class="additional-content lmla-hidden">
		<h2 class="section-title"><?php echo CFS()->get('mission_title_two'); ?></h2>

		<img src="<?php echo CFS()->get('mission_image_one'); ?>"/>

		<div class="text-wrapper"><?php echo CFS()->get('mission_text_two'); ?></div>

		<style> .partner-link-btn a {color: <?php echo CFS()->get('partner_text_color_two'); ?>;} </style>
		<style> .partner-link-btn {background: <?php echo CFS()->get('partner_link_color_two'); ?>;} </style>
		<div class="partner-link-btn"><?php echo CFS()->get('partner_link_two'); ?></div>

	</section>

	<section class="additional-content lmla-hidden">
		<h2 class="section-title"><?php echo CFS()->get('partnerships_title'); ?></h2>

		<div class="text-wrapper"><?php echo CFS()->get('partnerships_text'); ?></div>

		<div><?php echo CFS()->get('partnerships_form'); ?></div>
	</section>

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'lmla16' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
