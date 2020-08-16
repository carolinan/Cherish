<?php
/**
 * Template for displaying posts.
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
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}

	the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-link">' . __( 'Pages: ', 'cherish' ),
			'after'  => '</div>',
		)
	);

	if ( is_attachment() ) {
		next_image_link();
		previous_image_link();
	}

	cherish_meta();
	echo '</div>';

}

the_post_navigation(
	array(
		'prev_text' => '&larr; %title',
		'next_text' => '%title &rarr;',
	)
);

comments_template( '', true );

echo '</div></div>';

get_footer();
