<?php
/**
 * Template for displaying posts on archives and index.
 *
 * @package Cherish
 */

 /* Color settings */
$cherish_color_meta_value       = get_post_meta( get_the_ID(), 'meta-color', true );
$cherish_text_color_meta_value  = get_post_meta( get_the_ID(), 'cherish-text-color', true );

if ( $cherish_text_color_meta_value ) {
	echo '<style> .post-' . get_the_ID() . ' a:not( .wp-block-button__link ) {color:' . esc_attr( $cherish_text_color_meta_value ) . ';}
	.post-' . get_the_ID() . ' .entry-header .post-title a:after { background:' . esc_attr( $cherish_text_color_meta_value ) . ';}
	.post-' . get_the_ID() . ' .entry-header .post-title a:hover:after { background:' . esc_attr( $cherish_text_color_meta_value ) . ';}
	</style>';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
<?php echo ( $cherish_color_meta_value ? 'style="background: ' . esc_attr( $cherish_color_meta_value ) . ';"' : '' ); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
		} else {
			the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php
	if ( strpos( $post->post_content, '[gallery' ) === false ) {
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
	}

	the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-link">' . __( 'Pages: ', 'cherish' ),
			'after'  => '</div>',
		)
	);

	echo '</div>';

	cherish_meta();
	?>
</div>
