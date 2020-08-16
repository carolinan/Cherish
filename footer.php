<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cherish
 */

?>
<div id="footer" role="contentinfo">
	<div class="widget_wrap">
	<?php
	if ( is_active_sidebar( 1 ) ) {
		echo '<ul class="footer_widget_1">';
			dynamic_sidebar( 1 );
		echo '</ul>';
	}
	if ( is_active_sidebar( 2 ) ) {
			echo '<ul class="footer_widget_2">';
			dynamic_sidebar( 2 );
		echo '</ul>';
	}
	if ( is_active_sidebar( 3 ) ) {
			echo '<ul class="footer_widget_3">';
			dynamic_sidebar( 3 );
		echo '</ul>';
	}
	?>
	</div>
	<?php
	if ( ! get_theme_mod( 'cherish_details' ) ) {
		echo '<div class="divider"></div>';
	}

	cherish_social_menu();
	?>
	<div class="footer-credit">
	<?php
	if ( ! get_theme_mod( 'cherish_hide_gototop' ) ) {
		?>
		<span class="fa-angle-up fa" title="<?php esc_attr_e( 'Back to the top', 'cherish' ); ?>"></span>
		<?php
	}
	if ( ! get_theme_mod( 'cherish_hide_credits' ) ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="sep"> | </span>
		<a href="https://wordpress.org/"><?php esc_html_e( 'Proudly powered by WordPress', 'cherish' ); ?></a><span class="sep"> | </span>
		<a href="<?php echo esc_url( 'https://themesbycarolina.com' ); ?>" rel="nofollow"><?php esc_html_e( 'Theme: Cherish by Carolina', 'cherish' ); ?></a>
		<?php
	}
	?>
	</div> <!--End Footer Credit -->
</div> <!--End Footer -->
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
