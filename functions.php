<?php
/**
 * Cherish functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cherish
 */

if ( ! function_exists( 'cherish_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features.
	 */
	function cherish_setup() {
		$cherish_ch = array(
			'default-image'      => get_template_directory_uri() . '/images/cherry3.png',
			'random-default'     => false,
			'width'              => 1900,
			'height'             => 660,
			'flex-height'        => true,
			'flex-width'         => true,
			'uploads'            => true,
			'header-text'        => true,
			'default-text-color' => '000000',
			'wp-head-callback'   => 'cherish_customize_css',
		);

		register_default_headers(
			array(
				'cherry'            => array(
					'url'           => '%s/images/cherry.png',
					'thumbnail_url' => '%s/images/cherry-thumb.png',
					/* translators: header image description */
					'description'   => __( 'Cherry', 'cherish' ),
				),
				'cherry2'           => array(
					'url'           => '%s/images/cherry2.png',
					'thumbnail_url' => '%s/images/cherry2-thumb.png',
					/* translators: header image description */
					'description'   => __( 'Cherry 2', 'cherish' ),
				),
				'cherry3'           => array(
					'url'           => '%s/images/cherry3.png',
					'thumbnail_url' => '%s/images/cherry3-thumb.png',
					/* translators: header image description */
					'description'   => __( 'Cherry 3', 'cherish' ),
				),
			)
		);

		add_theme_support( 'custom-header', $cherish_ch );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'jetpack-responsive-videos' );

		add_theme_support(
			'custom-logo',
			array(
				'height'     => 100,
				'width'      => 100,
				'flex-width' => true,
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );

		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Navigation', 'cherish' ),
				'social' => esc_html__( 'Social Menu', 'cherish' ),
			)
		);

		add_editor_style();

		/* width */
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 560;
		}

		// Define and register starter content to showcase the theme on new sites.
		$starter_content = array(
			'widgets'       => array(
				// Place three core-defined widgets in the sidebar area.
				'sidebar-1' => array(
					'text_business_info',
				),

				// Add the core-defined business info widget to the footer 1 area.
				'sidebar-2' => array(
					'text_about',
				),

				// Put two core-defined widgets in the footer 2 area.
				'sidebar-3' => array(
					'search',
				),
			),
			'posts' => array(
				'front' => array(
					'post_type' => 'page',
					'post_title' => _x( 'Example front page with blocks', 'Theme starter content', 'cherish' ),
					'post_content' => join(
						'',
						array(
							'<!-- wp:paragraph -->
							<p>' . _x( 'This is an example page used to show you what you can do with Cherish and the new block editor.', 'Theme starter content', 'cherish' ) . '&nbsp;&nbsp;</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph {"align":"center","customBackgroundColor":"#fbd0db","fontSize":"medium"} -->
							<p style="background-color:#fbd0db;text-align:center" class="has-background has-medium-font-size">
							<em><strong>' . _x( 'Edit this page to make it your own.', 'Theme starter content', 'cherish' ) . '</strong></em></p>
							<!-- /wp:paragraph -->

							<!-- wp:gallery {"ids":[31,32,41],"columns":2,"align":"wide","className":"alignwide"} -->
							<ul class="wp-block-gallery alignwide columns-2 is-cropped"><li class="blocks-gallery-item">
							<figure><img src="' . esc_url( get_theme_file_uri( '/images/cherry2.png' ) ) . '" 
							alt="" data-id="31" data-link="' . esc_url( get_theme_file_uri( '/images/cherry2.png' ) ) . '" class="wp-image-31"/>
							</figure></li><li class="blocks-gallery-item">
							<figure><img src="' . esc_url( get_theme_file_uri( '/images/cherry.png' ) ) . '" 
							alt="" data-id="32" data-link="' . esc_url( get_theme_file_uri( '/images/cherry.png' ) ) . '" class="wp-image-32"/>
							</figure></li><li class="blocks-gallery-item">
							<figure><img src="' . esc_url( get_theme_file_uri( '/images/cherry3.png' ) ) . '" 
							alt="" data-id="41" data-link="' . esc_url( get_theme_file_uri( '/images/cherry3.png' ) ) . '" class="wp-image-41"/>
							</figure></li></ul>
							<!-- /wp:gallery -->

							<!-- wp:quote {"className":"is-style-large"} -->
							<blockquote class="wp-block-quote is-style-large"><p><br><strong>' .
							_x( 'Cherish each hour of this day for it can never return.', 'Theme starter content', 'cherish' ) . '
							</strong><br></p>
							<cite><br><em>' . _x( 'Og Mandino', 'Theme starter content', 'cherish' ) . '</em></cite>
							</blockquote>
							<!-- /wp:quote -->

							<!-- wp:columns -->
							<div class="wp-block-columns has-2-columns"><!-- wp:column -->
							<div class="wp-block-column"><!-- wp:paragraph -->
							<p>' . _x( 'You can display content in columns, like this.', 'Theme starter content', 'cherish' ) . '</p>
							<!-- /wp:paragraph --></div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column"><!-- wp:paragraph -->
							<p>' . _x( 'And even add lists of comments and posts:', 'Theme starter content', 'cherish' ) . '</p>
							<!-- /wp:paragraph --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->

							<!-- wp:latest-posts /-->

							<!-- wp:latest-comments /-->

							<!-- wp:cover {"url":' . esc_url( get_theme_file_uri( '/images/cherry3.png' ) ) . ') ","align":"full","id":41,"hasParallax":true,"dimRatio":0,"overlayColor":"pale-cyan-blue"} -->
							<div class="wp-block-cover has-pale-cyan-blue-background-color has-parallax alignfull" style="background-image:url(' . esc_url( get_theme_file_uri( '/images/cherry3.png' ) ) . ')">
							<p class="wp-block-cover-text"><strong>This is a full width cover block with a fixed background image.</strong></p></div>
							<!-- /wp:cover -->
					
							',
						)
					),
				),
				'about',
				'blog',
				'contact',
			),
			// Default to a static front page and assign the front and posts pages.
			'options' => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{front}}',
				'page_for_posts' => '{{blog}}',
			),

			// Set up nav menus for each of the two areas registered in the theme.
			'nav_menus' => array(
				// Assign a menu to the "header" location.
				'header'    => array(
					'name'  => __( 'Menu', 'cherish' ),
					'items' => array(
						'page_about',
						'page_blog',
						'page_contact',
					),
				),
			),
		);

		$starter_content = apply_filters( 'cherish_starter_content', $starter_content );

		add_theme_support( 'starter-content', $starter_content );

	}
} // End if().
add_action( 'after_setup_theme', 'cherish_setup' );

if ( ! function_exists( 'cherish_fonts_url' ) ) {
	/**
	 * Helper function for enqueueing google fonts.
	 */
	function cherish_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		$fonts[] = get_theme_mod( 'cherish_font', 'Lily Script One' );
		if ( get_theme_mod( 'cherish_site_title_font', 'Lily Script One' ) !== get_theme_mod( 'cherish_font', 'Lily Script One' ) ) {
			$fonts[] = get_theme_mod( 'cherish_site_title_font', 'Lily Script One' );
		}

		$fonts[] = 'Noto Serif';

		/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'cherish' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'devanagari' === $subset ) {
			$subsets .= ',devanagari';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg(
				array(
					'family' => rawurlencode( implode( '|', $fonts ) ),
					'subset' => rawurlencode( $subsets ),
				),
				'//fonts.googleapis.com/css'
			);
		}
		return $fonts_url;
	}
}

/**
 * Enqueue fonts and scripts
 */
function cherish_styles_scripts() {
	wp_enqueue_style( 'cherish_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_style_add_data( 'cherish_style', 'rtl', 'replace' );

	wp_enqueue_style( 'cherish-fonts', cherish_fonts_url(), array(), null );
	wp_enqueue_style( 'open-sans' );

	wp_enqueue_script( 'cherish-navigation', get_template_directory_uri() . '/inc/navigation.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'cherish-skip-link-focus-fix', get_template_directory_uri() . '/inc/skip-link-focus-fix.js', array(), wp_get_theme()->get( 'Version' ), true );

	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'cherish_woo', get_template_directory_uri() . '/inc/woocommerce.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	if ( class_exists( 'bbpress' ) ) {
		wp_enqueue_style( 'cherish_bbpress', get_template_directory_uri() . '/inc/bbpress.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cherish_styles_scripts' );

if ( ! function_exists( 'cherish_editor_assets' ) ) {
	/**
	 * Add styles and fonts for the block editor.
	 */
	function cherish_editor_assets() {
		wp_enqueue_style( 'cherish-fonts-gutenberg', cherish_fonts_url(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'cherish-editor', get_theme_file_uri( 'inc/gutenberg-editor.css' ), array(), wp_get_theme()->get( 'Version' ), false );
	}

	add_action( 'enqueue_block_editor_assets', 'cherish_editor_assets' );
}

/**
 *
 * Enqueue the color picker for the meta box that lets the user change the background color of the posts and pages.
 */
function cherish_color_enqueue() {
	global $typenow;
	if ( 'post' === $typenow || 'page' === $typenow ) {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'cherish_meta-box-color-js', get_template_directory_uri() . '/inc/meta-box-color.js', array(), wp_get_theme()->get( 'Version' ) );

		$cherish_color_meta_value      = get_post_meta( get_the_ID(), 'meta-color', true );
		$cherish_text_color_meta_value = get_post_meta( get_the_ID(), 'cherish-text-color', true );

		$color = array(
			'cherish_background' => $cherish_color_meta_value,
			'cherish_text_color' => $cherish_text_color_meta_value,
		);
		wp_localize_script( 'cherish_meta-box-color-js', 'cherish_colors', $color );
	}
}
add_action( 'admin_enqueue_scripts', 'cherish_color_enqueue' );

/**
 * Register widget areas.
 */
function cherish_widgets_init() {
	register_sidebar(
		array(
			'name'         => __( 'Footer widget 1', 'cherish' ),
			'description'  => __( 'Widgets in this area will be shown on the left-hand side.', 'cherish' ),
			'before_title' => '<h2 class="widgettitle">',
			'after_title'  => '</h2>',
			'id'           => 'sidebar-1',
		)
	);

	register_sidebar(
		array(
			'name'         => __( 'Footer widget 2', 'cherish' ),
			'description'  => __( 'Widgets in this area will be shown in the middle', 'cherish' ),
			'before_title' => '<h2 class="widgettitle">',
			'after_title'  => '</h2>',
			'id'           => 'sidebar-2',
		)
	);

	register_sidebar(
		array(
			'name'         => __( 'Footer widget 3', 'cherish' ),
			'description'  => __( 'Widgets in this area will be shown on the right-hand side.', 'cherish' ),
			'before_title' => '<h2 class="widgettitle">',
			'after_title'  => '</h2>',
			'id'           => 'sidebar-3',
		)
	);
}
add_action( 'widgets_init', 'cherish_widgets_init' );

// Customizer and metabox.
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/metabox.php';

// Theme documentation.
require get_template_directory() . '/inc/theme-info.php';

// Social media icons.
require get_template_directory() . '/inc/icon-functions.php';


/**
 * Adds a conditional link for pingsbacks to the header.
 */
function cherish_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cherish_pingback_header' );

/**
 * Adds a title to posts that are missing titles.
 */
function cherish_post_title( $title ) {
	if ( '' == $title ) {
		return __( 'No title', 'cherish' );
	} else {
		return $title;
	}
}
add_filter( 'the_title', 'cherish_post_title' );

/**
 * Comments.
 */
function cherish_comment( $comment, $args, $depth ) {
	?>
	<li <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
	<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
		<div class="comment-author vcard">
		<?php
		if ( get_avatar( $comment ) ) {
				echo get_avatar( $comment, '44' );
		} else {
			/*If avatars are off, show a font-awesome icon.*/
			echo '<i class="avataroff fa-big"></i>';
		}
		printf( '<h3>%s</h3>', get_comment_author_link() );
		?>
			<div class="comment-meta commentmetadata">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php /* translators: 1: date, 2: time */ printf( __( '%1$s at %2$s', 'cherish' ), get_comment_date(), get_comment_time() ); ?>
				</a>
				<?php edit_comment_link( __( '(Edit)', 'cherish' ), '','' ); ?>
			</div>
		</div>
		<?php
		comment_text();
		if ( '0' == $comment->comment_approved ) {
			?>
			<em class="comment-awaiting-moderation"><?php __( 'Your comment is awaiting moderation.', 'cherish' ); ?></em>
			<?php
		}
		if ( comments_open() ) {
			?>
			<div class="reply">
			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below'  => 'div-comment',
						'depth'      => $depth,
						'max_depth'  => $args['max_depth'],
						'reply_text' => '<i class="reply-link fa-big"></i><span class="screen-reader-text">' . __( 'Reply', 'cherish' ) . '</span>',
					)
				)
			);
			?>
			</div>
			<?php
		}
		echo '</div>';
}

/**
 * Meta information.
 */
function cherish_meta() {
	global $id;
	echo '<div class="meta"><p>';
	if ( ! get_theme_mod( 'cherish_hide_meta' ) ) {
		esc_html_e( 'By ', 'cherish' );
		printf(
			( '<a href="%3$s" title="%4$s" rel="author">%5$s</a> %2$s.' ),
			esc_url( get_permalink() ),
			esc_html( get_the_date( get_option( 'date_format' ) ) ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			/* translators: %s author name */
			esc_attr( sprintf( __( 'View all posts by %s', 'cherish' ), get_the_author() ) ),
			get_the_author()
		);
		echo '&nbsp; ';
		if ( comments_open() ) {
			comments_popup_link();
		}
		echo '&nbsp; ';
		if ( count( get_the_category() ) ) {
			echo ' ' . get_the_category_list( ', ' );
		}
		echo '&nbsp; ';
		if ( get_the_tag_list() ) {
			echo ' ' . get_the_tag_list( '', ', ' );
		}
		echo '&nbsp; ';
		edit_post_link( __( 'Edit', 'cherish' ) . ' <span class="screen-reader-text">' . get_the_title( $id ) . '</span>' );
	}

	if ( ! get_theme_mod( 'cherish_details' ) ) {
		echo '</p><div class="divider"></div></div>';
	} else {
		echo '</p></div>';
	}
}

/**
 *  Call to action.
 */
function cherish_action() {
	if ( ! get_theme_mod( 'cherish_hide_action' ) ) {
		if ( get_theme_mod( 'cherish_action_text' ) ) {
			echo '<div id="action">';
			if ( get_theme_mod( 'cherish_action_link' ) ) {
				echo '<a href="' . esc_url( get_theme_mod( 'cherish_action_link' ) ) . '">';
			}
			echo wp_kses_post( get_theme_mod( 'cherish_action_text' ) );
			if ( get_theme_mod( 'cherish_action_link' ) ) {
				echo '</a>';
			}
			echo '</div>';
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
			echo '<div id="action">';
			printf(
				/* translators: %s link to the customizer */
				__( '<a href="%s">Click here to setup your Call to Action</a>', 'cherish' ),
				esc_url( admin_url( '/customize.php?autofocus[section]=cherish_section_three' ) )
			);
			echo '</div>';
		}
	}
}

if ( class_exists( 'woocommerce' ) ) {
	add_filter( 'loop_shop_columns', 'cherish_loop_columns' );
	if ( ! function_exists( 'cherish_loop_columns' ) ) {
		/**
		 * Displays 3 products per row.
		 */
		function cherish_loop_columns() {
			return 3;
		}
	}

	/* Remove wrappers */
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
	/* Add wrappers */
	add_action( 'woocommerce_before_main_content', 'cherish_theme_wrapper_start', 10 );
	add_action( 'woocommerce_after_main_content', 'cherish_theme_wrapper_end', 10 );

	/**
	 * Start Cherish WooCommerce wrapper.
	 */
	function cherish_theme_wrapper_start() {
		echo '<div class="container"><div class="post">';
	}

	/**
	 * End Cherish WooCommerce wrapper.
	 */
	function cherish_theme_wrapper_end() {
		echo '</div></div>';
	}
}

/**
 * Print custom CSS depending on the theme options.
 */
function cherish_customize_css() {
	echo '<style type="text/css">
	.site-title { color: #' . esc_attr( get_header_textcolor() ) . '; ';
	if ( get_theme_mod( 'cherish_text_shadow_active' ) ) {
		echo 'text-shadow: 2px 2px 3px ' . esc_attr( get_theme_mod( 'cherish_text_shadow', '#fff' ) ) . ';';
	}
	echo '}
	.site-description { color: #' . esc_attr( get_header_textcolor() ) . ';}';

	echo '#header{
		background:url("' . esc_url( get_header_image() ) . '");
		background-size: cover;
		height:' . esc_attr( get_custom_header()->height ) . 'px;
	}';

	echo '.entry-header .post-title a:hover:after, .main-navigation a:hover:after { background: ' . esc_attr( get_theme_mod( 'cherish_accent_color' ) ) . ';}';
	echo 'a:active, a:hover, .main-navigation a:hover:after, .main-navigation a:hover,
		.main-navigation a:focus { color: ' . esc_attr( get_theme_mod( 'cherish_accent_color' ) ) . ';}';

	echo '#mobile-menu-toggle:hover, #mobile-menu-toggle:focus { border: 2px solid ' . esc_attr( get_theme_mod( 'cherish_accent_color' ) ) . ';}';

	echo '.social-menu li a:focus .icon, .social-menu li a:hover .icon{fill:' . esc_attr( get_theme_mod( 'cherish_accent_color' ) ) . ';}';

	if ( ! get_theme_mod( 'cherish_hide_action' ) ) {
		if ( get_theme_mod( 'cherish_action_color' ) ) {
			echo '#action, #action a{color:' . esc_attr( get_theme_mod( 'cherish_action_color' ) ) . ';}';
		}
		if ( get_theme_mod( 'cherish_action_bgcolor' ) ) {
			echo '#action{background-color:' . esc_attr( get_theme_mod( 'cherish_action_bgcolor' ) ) . ';}';
		}
		if ( get_theme_mod( 'cherish_action_size' ) ) {
			echo '#action{font-size:' . esc_attr( get_theme_mod( 'cherish_action_size' ) ) . 'em;}';
		}
	}

	if ( get_theme_mod( 'cherish_center_menu', 0 ) !== 0 ) {
		echo '.main-navigation {text-align: center}';
	}

	echo 'a:focus, #footer a:focus, #header-menu a:focus{text-decoration:underline;}';
	echo ".post-title,
		.archive-title,
		.view_posts_by,
		.more-link,
		.page-link,
		.nav-previous,
		.nav-next,
		h2#comments-title,
		.comment-reply-title,
		.paged-comments,
		.widgettitle,
		#wp-calendar caption,
		#bbpress-forums  fieldset.bbp-form legend {
			font-family: '" . esc_attr( get_theme_mod( 'cherish_font', 'Lily Script One' ) ) . "', serif;
		}\n";
	echo ".site-title,
		.site-title a {
			font-family: '" . esc_attr( get_theme_mod( 'cherish_site_title_font', 'Lily Script One' ) ) . "', serif;
		}\n";
	echo '</style>';
}
add_action( 'wp_head', 'cherish_customize_css' );


function cherish_logo_link() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$html           = '';

	$custom_logo_attr = array(
		'class' => 'custom-logo',
	);

	/*
	* If the logo alt attribute is empty, get the site title and explicitly
	* pass it to the attributes used by wp_get_attachment_image().
	*/
	$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
	if ( empty( $image_alt ) ) {
		$custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
	}

	if ( get_theme_mod( 'cherish_logo_link', esc_url( home_url( '/' ) ) ) === '' ) {
		$html = wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr );
	} elseif ( get_theme_mod( 'cherish_logo_link', esc_url( home_url( '/' ) ) ) === esc_url( home_url( '/' ) ) ) {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
			esc_url( home_url( '/' ) ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
		);
	} else {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link">%2$s</a>',
			esc_url( get_theme_mod( 'cherish_logo_link' ) ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
		);
	}
	return $html;

}
add_filter( 'get_custom_logo', 'cherish_logo_link' );
