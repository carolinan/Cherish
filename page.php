<?php
/**
 * Template for displaying pages.
 *
 * @package Cherish
 */

get_header();

/* Color settings */
$cherish_color_meta_value      = get_post_meta( get_the_ID(), 'meta-color', true );
$cherish_text_color_meta_value = get_post_meta( get_the_ID(), 'cherish-text-color', true );
if ( ! $cherish_color_meta_value ) {
	echo '<div class="container">';
} else {
	echo '<div class="container" style="background:' . esc_attr( $cherish_color_meta_value ) . ';">';
}

while ( have_posts() ) {
	the_post();
	if ( $cherish_text_color_meta_value ) {
		echo '<style> .post-' . get_the_ID() . ' .entry-content a:not( .wp-block-button__link ) {color:' . esc_attr( $cherish_text_color_meta_value ) . ';}</style>';
	}
	?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="post-title"
			<?php echo ( $cherish_text_color_meta_value ? 'style="color: ' . esc_attr( $cherish_text_color_meta_value ) . ';"' : '' ); ?> >
			<?php the_title(); ?>
		</h1>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-link">' . __( 'Pages: ', 'cherish' ),
					'after'  => '</div>',
				)
			);
			?>
			<div class="page-link">
				<?php edit_post_link( __( 'Edit', 'cherish' ) . ' <span class="screen-reader-text">' . get_the_title( $id ) . '</span>' ); ?>
			</div>
		</div>
	<?php
}

comments_template( '', true );
?>
</div>
</div>
<?php
get_footer();
