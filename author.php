<?php
/**
 * The template for displaying Author pages
 *
 * @package Cherish
 */

get_header();
?>
<div class="container">
	<header class="entry-header">
		<h1 class="archive-title">
		<?php
		printf(
			/* Translators: %s author name. */
			esc_html__( 'About %s', 'cherish' ),
			get_the_author_meta( 'display_name' )
		);
		?>
		</h1>
	</header><!-- .entry-header -->
	<div class="author-info">
		<div class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?></div>
		<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
	</div>

	<h2 class="view_posts_by">
	<?php
	printf(
		/* Translators: %s author name. */
		esc_html__( 'View all posts by %s:', 'cherish' ),
		get_the_author_meta( 'display_name' )
	);
	?>
	</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		$cherish_color_meta_value = get_post_meta( get_the_ID(), 'meta-color', true );
		if ( ! $cherish_color_meta_value ) {
			echo '<div class="container">';
		} else {
			echo '<div class="container" style="background:' . esc_attr( $cherish_color_meta_value ) . ';">';
		}
		get_template_part( 'content', get_post_format() );
		echo '</div>';
	}

	the_posts_navigation(
		array(
			'prev_text' => __( '&larr; Previous page', 'cherish' ),
			'next_text' => __( 'Next page &rarr;', 'cherish' ),
		)
	);

	echo '</div>';

	get_footer();
