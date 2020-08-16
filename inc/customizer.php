<?php
/**
 *  Cherish Theme Customizer.
 *
 * @package Cherish
 */

/**
 * Register our customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cherish_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'cherish_section_six',
		array(
			'title'    => __( 'Fonts and text shadow', 'cherish' ),
			'priority' => 90,
		)
	);

	$wp_customize->add_section(
		'cherish_section_two',
		array(
			'title'    => __( 'Post settings', 'cherish' ),
			'priority' => 95,
		)
	);

	$wp_customize->add_section(
		'cherish_section_three',
		array(
			'title'    => __( 'Call to Action', 'cherish' ),
			'priority' => 80,
		)
	);

	$wp_customize->add_section(
		'cherish_section_four',
		array(
			'title'    => __( 'Extra settings', 'cherish' ),
			'priority' => 100,
		)
	);

	/** Accent color */
	$wp_customize->add_setting(
		'cherish_accent_color',
		array(
			'default'           => '#3670A9',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cherish_accent_color',
			array(
				'label'    => __( 'Accent color:', 'cherish' ),
				'settings' => 'cherish_accent_color',
				'section'  => 'colors',
			)
		)
	);

	/** Text shadow */
	$wp_customize->add_setting(
		'cherish_text_shadow_active',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_text_shadow_active',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to add a text shadow to the site title. This can make your text easier to read when a background image is chosen.', 'cherish' ),
			'section' => 'cherish_section_six',
		)
	);

	$wp_customize->add_setting(
		'cherish_text_shadow',
		array(
			'default'           => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cherish_text_shadow',
			array(
				'label'    => __( 'Text shadow color:', 'cherish' ),
				'section'  => 'cherish_section_six',
				'settings' => 'cherish_text_shadow',
			)
		)
	);

	$wp_customize->add_setting(
		'cherish_site_title_font',
		array(
			'default'           => 'Lily Script One',
			'sanitize_callback' => 'cherish_sanitize_select',
		)
	);

	$font_choices = array(
		'Lily Script One'        => 'Lily Script One ' . __( '(Default)', 'cherish' ),
		'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
		'Pacifico'               => 'Pacifico',
		'Lobster'                => 'Lobster',
		'Norican'                => 'Norican',
		'Merriweather'           => 'Merriweather',
		'Poppins'                => 'Poppins',
		'Lora'                   => 'Lora',
		'Karla'                  => 'Karla',
		'Roboto'                 => 'Roboto',
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cherish_site_title_font',
			array(
				'label'    => __( 'Choose a font for the site title.', 'cherish' ),
				'section'  => 'cherish_section_six',
				'settings' => 'cherish_site_title_font',
				'type'     => 'select',
				'choices'  => $font_choices,
			)
		)
	);

	$wp_customize->add_setting(
		'cherish_font',
		array(
			'default'           => 'Lily Script One',
			'sanitize_callback' => 'cherish_sanitize_select',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cherish_font',
			array(
				'label'    => __( 'Choose a font for the post titles.', 'cherish' ),
				'section'  => 'cherish_section_six',
				'settings' => 'cherish_font',
				'type'     => 'select',
				'choices'  => $font_choices,
			)
		)
	);

	$wp_customize->add_setting(
		'cherish_hide_meta',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_hide_meta',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide all the meta information.', 'cherish' ),
			'section' => 'cherish_section_two',
		)
	);

	/* Call to action text **/
	$wp_customize->add_setting(
		'cherish_action_text',
		array(
			'sanitize_callback' => 'cherish_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'cherish_action_text',
		array(
			'type'    => 'text',
			'label'   => __( 'Add this text to the Call to Action area on the front page:', 'cherish' ),
			'section' => 'cherish_section_three',
		)
	);

	/** Call to action font-size */
	$wp_customize->add_setting(
		'cherish_action_size',
		array(
			'sanitize_callback' => 'cherish_sanitize_size',
		)
	);

	$wp_customize->add_control(
		'cherish_action_size',
		array(
			'type'    => 'text',
			'label'   => __( 'Change the font size of your text here: (em)', 'cherish' ),
			'section' => 'cherish_section_three',
		)
	);

	/** Call to action text color */
	$wp_customize->add_setting(
		'cherish_action_color',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cherish_action_color',
			array(
				'label'    => __( 'Change the color of your Call to action text:', 'cherish' ),
				'section'  => 'cherish_section_three',
				'settings' => 'cherish_action_color',
			)
		)
	);

	/** Call to action background color */
	$wp_customize->add_setting(
		'cherish_action_bgcolor',
		array(
			'default'           => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cherish_action_bgcolor',
			array(
				'label'    => __( 'Change the background color of your Call to action area:', 'cherish' ),
				'section'  => 'cherish_section_three',
				'settings' => 'cherish_action_bgcolor',
			)
		)
	);

	/* Logo link **/
	$wp_customize->add_setting(
		'cherish_logo_link',
		array(
			'default'           => esc_url( home_url( '/' ) ),
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'cherish_logo_link',
		array(
			'type'        => 'text',
			'label'       => __( 'Add a custom link to the logo:', 'cherish' ),
			'description' => __( 'Leave this option blank to disable the link', 'cherish' ),
			'section'     => 'title_tagline',
		)
	);

	/* Call to action link **/
	$wp_customize->add_setting(
		'cherish_action_link',
		array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'cherish_action_link',
		array(
			'type'    => 'text',
			'label'   => __( 'Add a link to the Call to action text:', 'cherish' ),
			'section' => 'cherish_section_three',
		)
	);

	$wp_customize->add_setting(
		'cherish_hide_action',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_hide_action',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide the Call to Action area.', 'cherish' ),
			'section' => 'cherish_section_three',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'cherish_hide_action',
		array(
			'selector'            => '#action',
			'container_inclusive' => true,
			'render_callback'     => 'cherish_action',
		)
	);

	/** Image details */
	$wp_customize->add_setting(
		'cherish_details',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_details',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide the floral post divider image.', 'cherish' ),
			'section' => 'cherish_section_two',
		)
	);

	/* Extras */

	$wp_customize->add_setting(
		'cherish_center_menu',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
			'default'           => 0,
		)
	);

	$wp_customize->add_control(
		'cherish_center_menu',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Center the main menu', 'cherish' ),
			'section' => 'cherish_section_four',
		)
	);

	$wp_customize->add_setting(
		'cherish_hide_credits',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_hide_credits',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide the footer credit links. :(', 'cherish' ),
			'section' => 'cherish_section_four',
		)
	);

	$wp_customize->add_setting(
		'cherish_hide_gototop',
		array(
			'sanitize_callback' => 'cherish_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'cherish_hide_gototop',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide the "go to top" icon and link.', 'cherish' ),
			'section' => 'cherish_section_four',
		)
	);

}
add_action( 'customize_register', 'cherish_customizer' );

/**
 * Sanitize Checkbox.
 */
function cherish_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitize the call to action text.
 */
function cherish_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Sanitize the call to action font-size.
 */
function cherish_sanitize_size( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

/**
 * Select sanitization callback, from https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 *
 * - Sanitization: select
 * - Control: select, radio
 *
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * and then validates `$input` against the choices defined for the control.
 *
 * @see sanitize_text_field() https://developer.wordpress.org/reference/functions/sanitize_text_field/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param string               $input   Slug to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
 */
function cherish_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_text_field( $input );
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
