<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tamd
 */

?>

	<footer class="footer">
		<div class="footer__container">
			<div class="footer__box">
				<div class="footer__item-container">
					<div class="footer__item"></div>
				</div>
				<div class="footer__item-container">
					<div class="footer__item"></div>
				</div>
				<div class="footer__item-container">
					<div class="footer__item"></div>
				</div>
			</div>
			<div class="footer__copyright"><?php echo get_field('copyright', 'option'); ?></div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
