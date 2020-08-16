<?php
/**
 * Documentation for Cherish WordPress theme.
 *
 * @package Cherish
 */

/**
 * Add the menu item under Appearance, themes.
 */
function cherish_docs_menu() {
	add_theme_page(
		__( 'Cherish Setup Help', 'cherish' ),
		__( 'Cherish Setup Help', 'cherish' ),
		'edit_theme_options',
		'cherish-theme',
		'cherish_docs'
	);
}
add_action( 'admin_menu', 'cherish_docs_menu' );

/**
 * Create the doucmentation page.
 */
function cherish_docs() {
	?>
	<div class="wrap">
	<div class="welcome-panel">
	<div class="welcome-panel-content">
	<h1><?php esc_html_e( 'Cherish Setup Help', 'cherish' ); ?></h1>
	<br>
	<span class="about-description">
	<?php
	esc_html_e( 'Thank you for downloading and trying out Cherish.', 'cherish' );
	echo '<br><br>	<b>';
	esc_html_e( 'Important upgrade information', 'cherish' );
	echo '</b><br>';
	_e( '-Because the two color options in the editor causes a delay when using the latest version of the block editor,<br> the options will be <b>removed</b> from the theme in the next update.', 'cherish' );
	echo '<br>';
	_e( 'It is most unfortunate, because the colors is one of the main features of the theme. But I wanted to notify you in advance. ', 'cherish' );
	echo '<br>';
	_e( '<b>You can optionally choose to not upgrade to the latest version, but you will then miss out on any new features that are added.<b>', 'cherish' );
	echo '<br><br>';
	?>
	</span><br>
	<div class="welcome-panel-column-container">
	<div>
	<h2><?php esc_html_e( 'Personalize your theme:', 'cherish' ); ?></h2>
	<a class="button button-primary button-hero load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>">
	<?php esc_html_e( 'Add a logo', 'cherish' ); ?></a>
	<a class="button button-primary button-hero load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_action_text' ) ); ?>">
	<?php esc_html_e( 'Enable the Call to Action', 'cherish' ); ?></a>
	<a class="button button-primary button-hero load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_font' ) ); ?>">
	<?php esc_html_e( 'Change the title font', 'cherish' ); ?></a>
	<a class="button button-primary button-hero load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_accent_color' ) ); ?>">
	<?php esc_html_e( 'Mix your favorite colors', 'cherish' ); ?></a>
	<a class="button button-medium button-hero load-customize" href="<?php echo esc_url( '#support' ); ?>"><?php esc_html_e( 'Support & Customization', 'cherish' ); ?></a>
	<br><br>
	</div>
	</div>
	</div>
	</div>

	<div class="welcome-panel">
	<div class="welcome-panel-content">
	<h2><?php esc_html_e( 'Theme Documentation & Setup', 'cherish' ); ?></h2>
		<nav>
		<ul class="subsubsub">
			<li><a href="#header"><?php esc_html_e( 'Header', 'cherish' ); ?></a></li>
			<li><a href="#menus"><?php esc_html_e( 'Menus', 'cherish' ); ?></a></li>
			<li><a href="#widgets"><?php esc_html_e( 'Widgets', 'cherish' ); ?></a></li>
			<li><a href="#posts"><?php esc_html_e( 'Post', 'cherish' ); ?></a></li>
			<li><a href="#footer"><?php esc_html_e( 'Footer', 'cherish' ); ?></a></li>
		</ul>
	</nav>
	<br>
	<h3 id="header"><?php esc_html_e( 'Header', 'cherish' ); ?></h3>
	<?php esc_html_e( 'Cherish has several options where you can customize your header.', 'cherish' ); ?>
	<br>
	<?php esc_html_e( 'The header image is optional. If you want to use a header image, the recommended size is 1900 X 660 pixels.', 'cherish' ); ?>
	<br><a class="button button-medium load-customize"
	href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_image' ) ); ?>">
	<?php esc_html_e( 'Add a header image', 'cherish' ); ?></a>
	<br><br>
	<?php esc_html_e( 'The logo is shown in the header area, centered above your Site title. The recommended size for the logo is 100 x 100 pixels.', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>"><?php esc_html_e( 'Add a logo', 'cherish' ); ?></a>
	<br><br>
	<?php esc_html_e( 'You can strengthen your branding further by adding a Site icon (favicon).', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=site_icon' ) ); ?>"><?php esc_html_e( 'Add a site icon', 'cherish' ); ?></a>
	<br><br>
	<?php esc_html_e( 'Select font and color for your site title and tag line:', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_textcolor' ) ); ?>">
	<?php esc_html_e( 'Select header text color', 'cherish' ); ?></a>
	&nbsp;
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_font' ) ); ?>">
	<?php esc_html_e( 'Select title font', 'cherish' ); ?></a>
	<br><br>
	<?php esc_html_e( 'The Call to Action in the header has the following options: Change the text, size, colors, and include a link. The Call to Action is entirely optional and it can be hidden.', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_action_text' ) ); ?>">
	<?php esc_html_e( 'Enable the Call to Action', 'cherish' ); ?></a>
	<h3 id="menus"><?php esc_html_e( 'Menus', 'cherish' ); ?></h3>
	<?php esc_html_e( 'The theme has two menu locations: The header navigation and a social menu.', 'cherish' ); ?>
	<div class="welcome-icon welcome-widgets-menus" style="margin:6px 0;"><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Manage menus', 'cherish' ); ?></a>
	</div>
	<?php esc_html_e( 'When you activate the social menu, it visible in the site footer.', 'cherish' ); ?>
	<br>
	<h4 style="margin-bottom:6px;"><?php esc_html_e( '-How to add a social menu:', 'cherish' ); ?></h4>
	<?php esc_html_e( 'The social menu uses svg icons to represent the social media links.', 'cherish' ); ?>
	<?php echo esc_html_x( 'It does not display any text, but has additional information for screen readers.', 'the social menu', 'cherish' ); ?><br>
	<?php esc_html_e( 'The icons will be added automatically, all you need to do is add a link to your menu.', 'cherish' ); ?>
	<br>
	<?php esc_html_e( 'Create a new menu, then click on Custom links and add your URL.', 'cherish' ); ?>
	<br>
	<?php esc_html_e( 'The Link Text that you provide is used as screen reader text.', 'cherish' ); ?><br>
	<img style="margin:6px 0;" src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-social2.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing where to add URLS for the social menu.', 'cherish' ); ?>"><br>
	<?php esc_html_e( 'Choose the theme location named Social Menu, and save.', 'cherish' ); ?><br>
	<img style="margin:6px 0;" src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-social3.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing what the social menu will look like when a theme location has been picked.', 'cherish' ); ?>">
	<br>
	<div class="notice notice-info inline"><?php esc_html_e( 'Troubleshooting: If your link or icon is not showing up, try using lower case letters.', 'cherish' ); ?></div>
	<b><?php esc_html_e( 'Available icons:', 'cherish' ); ?></b><br>
	<i style="display:block; max-width:340px;">
	<?php esc_html_e( 'amazon, bandcamp, behance, deviantart, codepen, digg, dribbble, dropbox, facebook, flickr, foursquare, ghost, github, instagram, linkedin, mixcloud, medium, pinterest, pocket, reddit, skype, slack, slideshare, spotify, soundcloud, stumbleupon, tumblr, twitch, twitter, wordpress, yelp, vimeo, vine, vk, youtube ', 'cherish' ); ?>
	</i>
	<h3 id="widgets"><?php esc_html_e( 'Widgets', 'cherish' ); ?></h3>
	<?php esc_html_e( 'The theme has three widget areas in the footer. All widget areas have room for any number of widgets. The widgets are shown in 3 column rows, which narrows down to 1 column rows on smaller screen widths.', 'cherish' ); ?>
	<div class="welcome-icon welcome-widgets-menus">
	<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add widgets', 'cherish' ); ?></a>
	</div>
	<h3 id="posts"><?php esc_html_e( 'Posts', 'cherish' ); ?></h3>
	<?php esc_html_e( 'Under Post Settings in the customizer, you can hide the meta information like the author, date and categories. This will hide the information both on the blog, archives and posts.', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_hide_meta' ) ); ?>">
	<?php esc_html_e( 'Hide the meta information', 'cherish' ); ?></a>
	<br><br>
	<?php esc_html_e( 'There is an additional option to hide the decorative image that is used as a divider between the posts.', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_details' ) ); ?>">
	<?php esc_html_e( 'Hide the image', 'cherish' ); ?></a>
	<br>
	<h3 id="footer"><?php esc_html_e( 'Footer', 'cherish' ); ?></h3>
	<?php esc_html_e( 'In the footer panel in the customizer you can:', 'cherish' ); ?>
	<br>
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_hide_credits' ) ); ?>"><?php esc_html_e( 'Hide the footer credit links', 'cherish' ); ?></a>
	&nbsp;
	<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=cherish_hide_gototop' ) ); ?>"><?php esc_html_e( 'Hide the go to top link', 'cherish' ); ?></a>
	<br><br>
	</div>
	</div>
	<div class="welcome-panel">
	<div class="welcome-panel-content" id="support">
	<h2><?php esc_html_e( 'Support & Customization', 'cherish' ); ?></h2>
	<?php esc_html_e( 'If you have questions, if you wish to purchase customizations or if something is not working as expected, you can also email me to check my availability and I will reply as soon as I can.', 'cherish' ); ?>
	<br>
	<a class="button button-medium button-hero load-customize" href="mailto:carolina@themesbycarolina.com"><?php esc_html_e( 'Contact', 'cherish' ); ?></a>
	<br><br>
	<?php
	printf(
		/* translators: %s: A link to the themes support page on WordPress.org  */
		__( 'You can also visit the <a href="%s">official support forum</a>.', 'cherish' ),
		esc_url( 'https://wordpress.org/support/theme/cherish' )
	);
	?>
	<br><br>
	</div>
	</div>
	<?php
}
