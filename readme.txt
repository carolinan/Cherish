=== Cherish ===
Contributors: Poena
Requires at least: 5.0
Tested up to: 5.5
Requires PHP: 5.6
License: Dual license: GNU General Public License v2 or later, and MIT License
License URI: https://www.gnu.org/licenses/gpl-2.0.html, https://opensource.org/licenses/MIT
Copyright 2014-2020 Carolina Nymark

Cherish is an accessibility ready, full width responsive theme with a fixed top menu. 

= Description ==
Cherish is an accessibility ready, full width, responsive theme with a fixed top menu.
It has 3 widget areas in the footer and you can change the background color,
title and link color of your posts and pages. Edit or disable your Call to Action area in the customizer,
where you can also change colors, fonts, hide your post meta and upload your own logo.

== Installation ==
1. Unzip `cherish.zip` to the `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance' menu in WordPress

== Known Limitations ==
-A one line menu is strongly recommended, instead of using long menus, use submenus.
-It's recommended not to use a font-size larger than 4em for the Call to Action area.


== Important upgrade information ==
-Because the two color options in the editor causes a delay
when using the latest version of the block editor,
the options will be removed from the theme in the next update, version 1.8.
It is unfortunate, but I wanted to notify you in advance.
You can optionally choose to not upgrade to the latest version, 
but you will then miss out on any new features that are added.

== Changelog ==

=1.8 2020-08-16=
Added required items to style.css.
Added license file.


=1.7 2020-04-19=
Added an option to add a custom link for the logo.
Softened the hover style for linked images.
Increased the spacing below featured images.
Added more font family options.
Separated site title and post title font options, so that you
can use different fonts for your site title.
Renamed the Footer customizer section to Extra.
Added an option to center the main menu.

=1.6 2019-08-10=
Added support for wp_body_open
Updated author URI.
Removed google plus since this service has been discontinued.


=1.5 2019-01-11=
Code style changes to better comply with WordPress coding standards. Improved escaping.
Added a setup help page.
Added a social menu.
Fixed an issue where the titles did not show for author archives and 404 pages.
Increased the size of the avatar on the author archive.
Fixed an issue where the editor would not show the correct font for the title.
Fixed an issue where hiding the site title would also hide the Call to Action.
Changed the description of the widget areas, since they are shown on all pages, not only the frontpage, oops :P.
Changes related to WooCommerce:
    Increased color contrasts, increased the size of some input fields and font sizes, 
    added underlines to some links to improve accessibility.
    Adjusted the width of the product page.
    Changed the number of products per row from 4 to 3.
    Fixed a problem where the selected font did not display correctly on shop and product pages.


=1.4 2018-12-16=
Housekeeping: Updated readme, updated links. Compressed header images.
Added a new screenshot to comply with the WordPress.org Theme Review requirements.
Code style changes to better comply with WordPress coding standards.
Changed the license to a dual license: GPL v2 or later, and MIT.
Added support for the block editor.
Made the content width narrower to match the editor and for a more comfortable reading length.
Added an accent color option.
Added an option to change title font.
Added an rtl stylesheet.
Added starter content.
Added a post and page title color option, and made sure the color options are visible in the block editor.
Style changes for the menu, making it larger and aligning it more to the left.
Made sure the menu is actually fixed (unless in mobile view).
Made sure links in contents and comments are underlined.
Removed some of the borders for a cleaner design.
Moved bbPress styles to a separate stylesheet that is only enqueued if bbPress is installed.


=1.3 2017-04-14=
The theme had a make over since it had not been updated in nearly two years.
General code and css improvements.
Removed unused files.
New link and menu styling.
Default color changes.
Removed the fade from the site title and description.
Removed the language files in favor of WordPress.org language packs.
Removed the reset option from the customizer.
Remove the footer logo and footer site title options.
Removed the widget visibility limitation. The footer widgets will now show on all pages.
Added support for the WordPress custom logo.
Added support for selective refresh.
Moved the call to action code to a separate function.
Replaced the old navigation with the new the_post_navigation(), the_posts_navigation() and the_comments_navigation().
Removed the archive title fallback in favor of the_archive_title().
Reverted to the default comment form.
Updated the author.php page to use the_author_meta() and get_the_author_meta().
New screenshot.


=1.2 2015-05-16=
Added 	add_theme_support( "title-tag" );
Fixed sidebar id bug
Minor changes to the customizer
Removed the jump down button since it caused some issues in firefox.


=1.0=
Improved styling for bbPress and Woocommerce.
Added a customizer option for a text shadow behind the site title and description.
Minor changes to the language files.

=0.8=
Updated screenshot

=0.7=
Improved accessibility.
Added a customizer option to remove or use a black post divider image.
Minor changes to the language files.


== Folders included in this theme ==
images/ -contains images.
languages/ -contains language files.
inc/ -contains the javascripts and customizer file.
fonts/ -contains Font Awesome files.

== Resources Used In This Theme ==
All included photos where taken by the theme author and are licensed as public domain. Copyright Carolina Nymark 2015-2019.
All images where created by the theme author and are licensed as public domain, Copyright Carolina Nymark 2015-2019.
-Except the mobile menu icon that is created by Font Awesome.

Font Awesome by @davegandy - https://fontawesome.com - @fontawesome
License - https://fontawesome.com/license/free 
# Icons: CC BY 4.0 License (https://creativecommons.org/licenses/by/4.0/)
In the Font Awesome Free download, the CC BY 4.0 license applies to all icons packaged as SVG and JS file types.

# Fonts: SIL OFL 1.1 License (https://scripts.sil.org/OFL)
In the Font Awesome Free download, the SIL OLF license applies to all icons
packaged as web and desktop font files.

# Code: MIT License (https://opensource.org/licenses/MIT)
In the Font Awesome Free download, the MIT license applies to all non-font and non-icon files.

Javascript
Keyboard Accessible Dropdown Menus
Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)
License: MIT

Cherish is a derivative work of:
Underscores https://underscores.me/, (C) 2012-2019 Automattic, Inc. License: GNU General Public License v2 or later
Twenty Seventeen https://wordpress.org/themes/twentyseventeen/ Copyright 2016-2019 WordPress.org, GNU General Public License v2 or later
Twenty Nineteen https://wordpress.org/themes/twentynineteen/ Copyright 2018-2019 WordPress.org, GNU General Public License v2 or later

Sanitization
Copyright (c) 2015-2019, WordPress Theme Review Team
https://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php

If you have any questions or suggestions for this theme please contact me on the theme support page, https://wordpress.org/support/theme/cherish.
