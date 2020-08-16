<?php
/**
 * Adds color options to the Post and Page edit screens.
 */
function cherish_add_meta_box() {
	$screens = array( 'post', 'page' );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'cherish_sectionid',
			__( 'Custom colors', 'cherish' ),
			'cherish_meta_box_callback',
			$screen,
			'side'
		);
	}
}
add_action( 'add_meta_boxes', 'cherish_add_meta_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function cherish_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'cherish_meta_box', 'cherish_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$cherish_color_meta_value      = get_post_meta( $post->ID, 'meta-color', true );
	$cherish_text_color_meta_value = get_post_meta( $post->ID, 'cherish-text-color', true );

	?>
	<p>
	<label for="meta-color"><?php esc_html_e( 'Background color:', 'cherish' ); ?></label>&nbsp; 
	<input name="meta-color" type="text" value="<?php echo esc_attr( $cherish_color_meta_value ); ?>" class="meta-color" />
	</p>
	<p>
	<label for="cherish-text-color"><?php esc_html_e( 'Title and link color:', 'cherish' ); ?></label>&nbsp; 
	<input name="cherish-text-color" type="text" value="<?php echo esc_attr( $cherish_text_color_meta_value ); ?>" class="cherish-text-color" />
	</p>
<?php
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function cherish_save_meta_box_data( $post_id ) {
	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['cherish_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( sanitize_key( $_POST['cherish_meta_box_nonce'] ), 'cherish_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	/*
	 * OK, its safe for us to save the data now.
	 * Make sure that it is set.
	 */
	if ( isset( $_POST['meta-color'] ) ) {
		// Sanitize user input.
		$cherish_data = sanitize_text_field( wp_unslash( $_POST['meta-color'] ) );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'meta-color', $cherish_data );
	}

	if ( isset( $_POST['cherish-text-color'] ) ) {
		// Sanitize user input.
		$cherish_data_text_color = sanitize_text_field( wp_unslash( $_POST['cherish-text-color'] ) );
		// Update the meta field in the database.
		update_post_meta( $post_id, 'cherish-text-color', $cherish_data_text_color );
	}

}
add_action( 'save_post', 'cherish_save_meta_box_data' );
