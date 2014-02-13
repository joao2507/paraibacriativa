=== WP Single Post Navigation ===
Contributors: daveshine, deckerweb
Donate link: http://genesisthemes.de/en/donate/
Tags: single post, navigation, browse, next, previous, next post, previous post, style, wordpress, buddypress, themes, frameworks, deckerweb
Requires at least: 3.0
Tested up to: 3.4
Stable tag: 1.5
License: GPLv2 or later
License URI: http://www.opensource.org/licenses/gpl-license.php

Plugin adds next & prev nav links on single posts to have a "browse post by post nav style". Includes customizeable parameters.

== Description ==
This **small and lightweight** plugin adds next & previous navigation links on single posts to have some kind of a browse post by post nav style. Using the WordPress core function for previous and next post links these links only appear on single posts. The browsing is chronological. Some blog authors prefer to have such a style to offer their readers some feeling of "book reading..." So the plugin might add some nice effect :). Styling with CSS is possible, please see under FAQ here!

In the css file a Media Query setting was added to avoid the display of these browse links on screens/ viewports with a width smaller than 1100px. You can edit this via CSS, see FAQ.

Finally, since version 1.4+ of the plugin you can reverse the link direction via defining a little constant in your theme or child theme. Please see the [FAQ section here](http://wordpress.org/extend/plugins/wp-single-post-navigation/faq/) for more info on that.

Also since version 1.4+ of the plugin you can customize the possible parameters of the previous/next post links - these are the same parameters the WordPress functions offers :-). Again, please see [FAQ section here](http://wordpress.org/extend/plugins/wp-single-post-navigation/faq/) for more info on that!

= Theme Framework and Theme support =
* *Out of the box the plugin should work great with most themes out there.*
* *For enhanced compatibility support for the following popular frameworks (these with hooks) and some themes (these with hooks, too) was added:*
* Genesis Framework by StudioPress & CopyBlogger Media (premium)
* Thesis Framework by DIYthemes (premium)
* Builder Framework by iThemes (premium)
* Catalyst Framework by Eric Hamm/CatalystTheme.com (premium)
* Hybrid Framework by ThemeHybrid/Justin Tadlock (free)
* Xtreme One Framework by XtremeTheme.com (premium)
* Headway Framework by Headway Themes, LLC (premium)
* Pagelines Framework (premium) / Platform (free) / Platform Pro all by Pagelines.com (premium)
* StartBox Framework by Brian Richards/rzen Media (free)
* Thematic Framework by ThemeShaper/Ian Stewart (free)
* Ashford Framework by Tim Bednar (free & pro version)
* Wonderflux Framework by Jonny Allbut/Team Wonderflux (free)
* Elemental Framework by Pro Theme Design/Ben Gillbanks & Darren Hoyt (premium)
* WP-Framework by Ptah Dunbar (free)
* Canvas Theme by WooThemes (premium)
* BuddyPress Default Theme/Template by WordPress.org/Automattic (free) - includes all child themes that are based on this one!
* Custom Community (free) and Custom Community Pro by Themekraft (BuddyPress specific themes)
* Suffusion by Sayontan Sinha (free, WP.org)
* Graphene by Khairul Syahir (free, WP.org)
* News, Prototype, Retro Fitted, Trending, My Life, Ascetica, Life Wire - all by Theme Hybrid (all free, WP.org)
* Oenology by Chip Bennett (free, WP.org)
* Twenty Twelve Theme (upcoming) by WordPress.org/Automattic (free)
* Twenty Eleven Theme by WordPress.org/Automattic (free)
* Twenty Ten Theme by WordPress.org/Automattic (free)
* **Note:** [For more themes listed please see under "Other Notes" here ...](http://wordpress.org/extend/plugins/wp-single-post-navigation/other_notes/)

*Note:* This works no matter if you use the default framework/parent theme alone or with a child theme - the conditional check always goes for the template (= parent theme) so the appropiate child theme is always included as well.

= Localization =
* English (default) - always included
* German (de_DE) - always included
* .pot file (`wpspn.pot`) for translators is also always included :)
* Easy plugin translation platform with GlotPress tool: [Translate "WP Single Post Navigation"...](hhttp://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/wp-single-post-navigation)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

[A plugin from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Drop me a line [@deckerweb](http://twitter.com/#!/deckerweb) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/deckerweb.service)
* Or follow me on [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)

== Installation ==

1. Upload `wp-single-post-navigation` folder to the `/wp-content/plugins/` directory -- or just upload the ZIP package via 'Plugins > Add New > Upload' in your WP Admin
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit any single post of your site or blog to see the browse links on the left and right side ...
4. Please note: This small and lightweight plugin has no options page (and don't ever will have!) - just activate and you're good to go :-).

**Own translation/wording:** For custom and update-secure language files please upload them to `/wp-content/languages/wp-single-post-navigation/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that, just use a language file like `wp-single-post-navigation-en_US.mo/.po` to achieve that (for creating one see the tools on "Other Notes").

== Frequently Asked Questions ==

= The link styles don't fit to my site and/or are invisible - what should I do? =
Don't panic. It's just some css styling - look at the next questions on how you can edit this. Thank you!
(The plugin comes only with one pre-defined style so it cannot fit with any site by default. Thank you for your understanding!)

= Can I change the color of the links and/or the link hover behaviour? =
Yes, you can!

*First alternative:* Just look in the packaged CSS file `single-post-navigation.dev.css` to find out the CSS selectors and rules and then overwrite them via your theme/child theme. In most cases you then have to apply them by adding an `!important` to the appropiate rule.

*Second alternative (HIGHLY recommeded!):*

(1) Add a print stylesheet file `wpspn-additons.css` to your active theme's/child theme's root folder and you're done. It will be automatically enqueued after the packaged plugin styles so you are able to override them.

(2) To not use the packaged plugin stylesheet at all just add your full own custom WPSPN stylesheet `wpspn-styles.css` to your active theme's/child theme's root folder and you're done. This will be properly enqueued then and NOT the plugin file.

Both ways are really easy and update-secure. Enjoy!

= Can I remove or change the styling of the tiny border lines? =
Yes, of course! Just the same procedure as above! Look for the documented style settings in the css file. - The alternative via theme/child theme is always recommended :)

= Can I adjust the media query for another display size (or even various sizes) because my site or content width is bigger/ smaller? =
Again, that's possible! Just the same procedure as above! Look for the documented style settings in the css file. - The alternative via extra .css files is always recommended :)

= Can I swap/reverse the direction of the browsing links? =
Finally, this is now possible since version 1.4+ of the plugin :). You only have to add one little line of code (a constant) to the functions.php file of your theme or child theme. (Only add this if you really want to change the direction of the links & arrows, if not then just DO NOT add it!) Please add the following code:
`
/**
 * WP Single Post Navigation: Reverse link direction
 */
define( 'WPSPN_REVERSE_LINK_DIRECTION', TRUE );
`

*Please note:* This leads to changing the general direction of the links, really book-like ("next post link" on the right side, "previous post link" on the left side). It will also lead to reversed arrows (the linked strings)!

= Can I customize the link string, set to only in the same category and can I exclude categories? =
Yes, this is now possible since version 1.4+ of the plugin via custom filters which you can add to your functions.php file of the current theme or child theme. -- There's one filter function for each of the two - "previous post link" and "next post link":

**Changing parameters for "previous post link":**
`
add_filter( 'wpspn_previous_post_link', 'custom_wpspn_previous_link' );
/**
 * WP Single Post Navigation: Add custom filters for "previous post link"
 */
function custom_wpspn_previous_link() {

	$args = array (
		'format'                => '%link',     // Change link format (default: %link)
		'link'                  => '&raquo;',   // Change link string (default: &raquo;)
		'in_same_cat'           => FALSE,       // Apply only to same category (default: FALSE)
		'excluded_categories'   => ''           // Exclude categories (default: empty)
	);

	previous_post_link( $args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories'] );
}
`
[You can also get this code from GitHub Gist here](https://gist.github.com/1574571) // See also [WordPress codex for info on the four possible parameters...](http://codex.wordpress.org/Template_Tags/previous_post_link)

If you reversed the link direction (see above FAQ entry) you might change the link string here to: `&laquo;`

**Changing parameters for "next post link":**
`
add_filter( 'wpspn_next_post_link', 'custom_wpspn_next_link' );
/**
 * WP Single Post Navigation: Add custom filters for "next post link"
 */
function custom_wpspn_next_link() {

	$args = array (
		'format'                => '%link',     // Change link format (default: %link)
		'link'                  => '&laquo;',   // Change link string (default: &laquo;)
		'in_same_cat'           => FALSE,       // Apply only to same category (default: FALSE)
		'excluded_categories'   => ''           // Exclude categories (default: empty)
	);

	next_post_link( $args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories'] );
}
`
[You can also get this code from GitHub Gist here](https://gist.github.com/1574576) // See also [WordPress codex for info on the four possible parameters...](http://codex.wordpress.org/Template_Tags/next_post_link)

If you reversed the link direction (see above FAQ entry) you might change the link string here to: `&raquo;`

= Can I customize the tooltip output? =
Yes, this is possible since plugin version 1.5 or higher. There are two filters available:

**wpspn_filter_previous_post_tooltip**

* Default value: 'Previous post:' plus title of previous post
* Example code:
`
add_filter( 'wpspn_filter_previous_post_tooltip', 'custom_wpspn_previous_post_tooltip_output' );
/** WP Single Post Navigation: Custom Previous Tooltip Output */
function custom_wpspn_previous_post_tooltip_output() {
	return __( 'Custom previous post:', 'your-text-domain' );
}
`

**wpspn_filter_next_post_tooltip**

* Default value: 'Next post:' plus title of next post
* Example code:
`
add_filter( 'wpspn_filter_next_post_tooltip', 'custom_wpspn_next_post_tooltip_output' );
/** WP Single Post Navigation: Custom Next Tooltip Output */
function custom_wpspn_next_post_tooltip_output() {
	return __( 'Custom next post:', 'your-text-domain' );
}
`


**Final note:** If you don't like to add your customizations to your theme's/child theme's `functions.php` file you can also add them to a functionality plugin or an mu-plugin. This way you can also use this better for Multisite environments. In general you are then more independent from theme/child theme changes etc.

All the custom & branding stuff code above can also be found as a Gist on Github: https://gist.github.com/2961493 (you can also add your questions/ feedback there :)


== Screenshots ==

1. Adding browse next & previous links to single posts - 1st example: included default style for light backgrounds
2. Adding browse next & previous links to single posts - 2nd example: user customized stylesheet for dark backgrounds

== Changelog ==

= 1.5 (2012-06-20) =
* *New features:*
 * NEW: Added tooltip display for the arrows, containing the title of the next/ previous post.
 * UPDATE: Improved changing of browsing direction via constant: now the browsing direction is reversed and also natively the direction of both arrows! (Just add: `define( 'WPSPN_REVERSE_LINK_DIRECTION', TRUE );` to your theme/ child theme to achieve this!)
 * NEW: Added own action hook for enqueueing own plugin or custom user stylesheets!
 * NEW: If a WPSPN stylesheet file `wpspn-styles.css` is found in your active theme's/child theme's root folder, this will be the used stylesheet - if it's not there, the packaged plugin stylesheet is being used! This is really handy, if you need to enqueue your own stylesheet and nothing else (i.e. for Multisite purposes...). All update-secure and really easy to handle!
 * NEW: Possible user style additions, additional to the plugin's default stylesheet: if a WPSPN stylesheet file `wpspn-additions.css` is found in your active theme's/child theme's root folder it will be added *after* the plugin's default. This way you can add some more rules or override existing selectors/rules. Again, all update-secure and really easy to handle!
 * NEW: Default plugin stylesheet now compressed/minified for improved performance. (To see the un-compressed stylesheet, just open the packaged bonus file `single-post-navigation.dev.css`)
* *Extended the theme support:*
 * Added support for "Infinity Framework" by Presscrew (though branded as an "Anti-Framework" :).
 * Added support for "rtPanel" Framework by rtCamp.
 * Added support for 7 free themes by Justin Tadlock/ Theme Hybrid (News, Prototype, Retro-Fitted, Trending, My Life, Ascetica, Live Wire).
 * Added support for 3 free themes by Galin/AlienWP/DevPress (Oxygen, Hatch, Origin) plus 1 premium theme (Hatch Pro)
 * Added support for 7 themes by DevPress (Visual - premium, James Goody - premium, Cascade - premium, Goa - premium, Fanwood - free, Dotos - free, Good - free)
 * Added support for free "Twenty Twelve" theme by WordPress.org/Automattic (free, WP.org) - will be the upcoming WP 3.5+ default theme!
 * Added support for free "Elbee Elgee" theme by Doug Stewart (free, WP.org)
 * Added support for 8 premium themes by "mysitemyway" brand (Myriad, Elegance, DejaVu, Method, Fusion, Echelon, Modular, Persuasion)
* *Other stuff, maintenance:*
 * UPDATE: In general, improved support for Thesis theme.
 * CODE: Minor code improvement: hooked loading call for textdomain into init hook for fullfilling standard
 * CODE: Added a few extra conditionals for some theme/template names to avoid conflicts between identically named themes from different vendors.
 * CODE: Beside new features, minor code/documentation tweaks and improvements.
 * UPDATE: Updated and improved documention of readme.txt file here.
 * UPDATE: Updated German translations and also the .pot file for all translators!
 * UPDATE: Extended GPL License info in readme.txt as well as main plugin file.
 * NEW: Easy plugin translation platform with GlotPress tool: [Translate "WP Single Post Navigation"...](hhttp://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/wp-single-post-navigation)

= 1.4 (2012-01-07) =
* Added support for 8 more single/parent themes (all free, WP.org or GitHub.com) - this making the plugin even more compatible and less buggy... :)
* *Finally:* Added possibility to reverse the link direction via a constant added to the theme or child theme - [please see FAQ section here for more info](http://wordpress.org/extend/plugins/wp-single-post-navigation/faq/)
* Added filters to the plugin which allow now to change the parameters for "previous post link" and "next post link" - all of the 4 parameters for the WordPress template tags/functions could be used - [please see FAQ here here for more info](http://wordpress.org/extend/plugins/wp-single-post-navigation/faq/) - *Note:* This requires v1.4 or higher of this plugin!
* Improved theme/template check for Thesis framework to include more versions of the theme for enhanced compatibility
* General code tweaks, also improved code documentation for newly added filters
* Added new rules for the customizations to CSS file, improved documentatin and code standards, furthermore fixed a documentation mistake
* Enhanced and improved readme.txt file with more info, documention and FAQ entries for customizing the parameters
* Updated German translations and also the .pot file for all translators!

= 1.3 (2012-01-02) =
* Added support for 4 more Theme Frameworks plus 2 other free themes - this making the plugin even more compatible and less buggy... :)
* Updated German translations and also the .pot file for all translators!

= 1.2 (2011-12-30) =
* Added support for 10 popular Theme Frameworks plus 6 popular Themes/Parent Themes via conditional function/hooks - this making the plugin more compatible and less buggy... :)
* Optimized CSS3 Media Query: only display the links for displays of 1100px width or bigger
* Added localization for the whole plugin, which is pretty much the plugin description section
* Added German translations (plus English included by default)
* For translators: added .pot file to the download package (`wpspn.pot` in `/languages/`)
* Improved and documented plugin code
* Big update of the readme.txt file documentation - especially the FAQ section and Theme Support in Description
* Tested & proved compatibility with WordPress 3.3 final release :-)

= 1.1.1 (2011-07-14) =
* Fixed crucial bug - added interim solution - works

= 1.1 (2011-07-14) =
* Added CSS3 Media Query to load only for bigger displays/ viewports
* Optimized and documented the stylesheet

= 1.0 (2011-07-01) =
* Initial release

== Upgrade Notice ==

= 1.5 =
Several changes and additions - Added support for 2 more theme frameworks, 15 free themes and 13 premium themes. Further, tweaked and improved some code. Also updated readme.txt file as well as .pot file for translators together with German translations.

= 1.4 =
Major changes and improvements - Added filters and constants for customizations via theme/child theme. Added support for 8 more (free) themes/parent themes. Some general code and documentation tweaks, also minor tweaks in CSS file. Updated readme.txt file and also .pot file for translators together with German translations.

= 1.3 =
Several changes - Added support for 4 more theme frameworks plus 2 free themes from WP.org. Updated .pot file for translators together with German translations.

= 1.2 =
Several changes - Added support for 10 popular theme frameworks plus 6 themes/parent themes. Optimzed media query, added localization and further improved code and documentation.

= 1.1.1 =
Important change - Fixed crucial bug - added interim solution - works.

= 1.1 =
Minor changes - Added CSS3 Media Query to load only for bigger displays/ viewports, optimized and documented the stylesheet.

= 1.0 =
Just released into the wild.

== Plugin Links ==
* [Translations (GlotPress)](http://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/wp-single-post-navigation)
* [User support forums](http://wordpress.org/support/plugin/wp-single-post-navigation)
* Code snippets archive for customizing, GitHub Gists: [in general](https://gist.github.com/2961493) / [previous post links](https://gist.github.com/1574571) / [next post links](https://gist.github.com/1574576)

== Donate ==
Enjoy using *WP Single Post Navigation*? Please consider [making a small donation](http://genesisthemes.de/en/donate/) to support the project's continued development.

== Translations ==

* English - default, always included
* German (de_DE): Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/wordpress-plugins/#wp-single-post-navigation)

**Easy plugin translation platform with GlotPress tool:** [**Translate "WP Single Post Navigation"...**](http://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/wp-single-post-navigation)

*Note:* All my plugins are internationalized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/), which works fine on Windows, Mac and Linux.

== Idea Behind / Philosophy ==
It's a really simple and leightweight plugin which generates a nice visual effect. It has no options panel - an don't ever will have one. Just activate and you're done. It's one of those plugins which just works in the background and you have nothing to maintain. Now enjoy just browsing your posts :).

This plugin is the result of an idea of a friend of mine - we experimented together and I came up with this. It works really fine in real life as most users reported to date. Still, it's more of an example of this idea. This could be easily implemented in almost every theme or framework and there are lots of possibilities to customize. -- Most important: Thank you for using or trying out this plugin!

== Full List of Suppoted Theme Frameworks and Single Themes ==
No worries, if your theme isn't listed here, the plugin should still work fine as there's a fallback function included :).

**Theme Frameworks:**

* Genesis Framework by StudioPress & CopyBlogger Media (premium)
* Thesis Framework by DIYthemes (premium)
* Builder Framework by iThemes (premium)
* Catalyst Framework by Eric Hamm/CatalystTheme.com (premium)
* Hybrid Framework by ThemeHybrid/Justin Tadlock (free)
* Xtreme One Framework by XtremeTheme.com (premium)
* Headway Framework by Headway Themes, LLC (premium)
* Pagelines Framework (premium) / Platform (free) / Platform Pro (premium) all by Pagelines.com
* StartBox Framework by Brian Richards/rzen Media (free)
* Thematic Framework by ThemeShaper/Ian Stewart (free)
* Ashford Framework by Tim Bednar (free & pro version)
* Wonderflux Framework by Jonny Allbut/Team Wonderflux (free)
* Elemental Framework by Pro Theme Design/Ben Gillbanks & Darren Hoyt (premium)
* WP-Framework by Ptah Dunbar (free)
* Canvas Theme by WooThemes (premium)
* Infinity Framework by Presscrew (beta/free) (though branded as an "Anti-Framework" :)
* rtPanel by rtCamp (free)

**BuddyPress specific:**

* BuddyPress Default Theme/Template by WordPress.org/Automattic (free) - includes all child themes that are based on this one!
* Custom Community (free) and Custom Community Pro (premium) by Themekraft (BuddyPress specific themes)

**Single Themes/Parent Themes:**

* Twenty Twelve Theme by WordPress.org/Automattic (free) // default theme 2012 (upcoming WP 3.5+)
* Twenty Eleven Theme by WordPress.org/Automattic (free) // default theme 2011 (WP 3.2+)
* Twenty Ten Theme by WordPress.org/Automattic (free) // default theme 2010 (WP 3.0+)
* Suffusion by Sayontan Sinha (free, WP.org)
* Graphene by Khairul Syahir (free, WP.org)
* Easel by Philip M. Hofer (Frumph) (free, WP.org)
* iFeature3 by "CyberChimps WordPress Themes" (free, WP.org)
* News, Prototype, Retro Fitted, Trending, My Life, Ascetica, Live Wire - all by Theme Hybrid (all free, WP.org/ThemeHybrid.com)
* Visual (premium), James Goody (premium), Cascade (premium), Goa (premium), Dotos (free), Good (free), Fanwood (free) - all by DevPress
* Toolbox by WordPress.org/Automattic (free)
* dkret3 by Joern Kretzschmar (free, WP.org)
* Grey Opaque by H.-Peter Pfeufer (free, WP.org)
* Oenology by Chip Bennett (free, WP.org)
* Elbee Elgee by Doug Stewart (free, WP.org)
* Skeleton by Simple Themes (free, simplethemes.com & GitHub.com)
* Admired by Brad Thomas (free, WP.org)
* Myriad, Elegance, DejaVu, Method, Fusion, Echelon, Modular, Persuasion all by "mysitemay" brand (all premium)
