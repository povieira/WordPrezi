=== WordPrezi ===
Contributors: povieira
Donate link: http://wordprezi.appspot.com/plugin
Tags: prezi, embed, wordpress, wordprezi
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: 0.5
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html

Shortcode to embed Prezi presentations into Wordpress blogposts.

== Description ==

**WordPrezi** is a plugin to help embedding the beautiful Prezi presententions into Wordpress blogposts.

Follow [WordPrezi](https://twitter.com/WordPrezi).

For more information, check out [WordPrezi plugin website](http://wordprezi.appspot.com/plugin).

*If this plugin has been helpful, please take a moment to
[rate it](http://wordpress.org/support/view/plugin-reviews/wordprezi#postform)!*

== Installation ==

= From your WordPress dashboard =

1. Visit 'Plugins > Add New'
1. Search for 'WordPrezi'
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Done!

= From WordPress.org =

1. Download *WordPrezi plugin*
1. Upload `wordprezi` directory to the `/wp-content/plugins/` directory via stp, sftp, ftp, etc...
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Done!

== Frequently Asked Questions ==

= Is this plugin related with WordPrezi (http://wordprezi.appspot.com) for Wordpress.com? =

YES! This is the alternative option for self-hosted Wordpress blog users.

= Can this plugin be incorporated by Wordpress.com some day? =

Hard to tell, but I really hope so. It would be great if Wordpress.com team could do that.

== Changelog ==

= 0.5 - 2014-09-11 =
* Tested with WP 4.0
* Prezi HTML5 comptibility

= 0.2 - 2014-04-24 =
* Bug fix WP 3.9 compatibility

= 0.1 =
* First release of WordPrezi plugin

== Usage ==

To embed your prezis into your blogposts, add the following shortcode into your blogpost:

`
[prezi url="prezi URL here"]
`

It is also possible to specify this options:
* *width and height*: dimensions of the embed prezi in pixels. Default dimensions: width=550 and height=400
* *zoom_freely*: `Y` if you want to **let users to pan and zoom freely** or `N` if you want to **constrain to simple back and forward steps**. `N` is default.

Example:

`
[prezi url="http://prezi.com/ebosu8kq6vjn/embed-prezi-into-wordpress/" width="600" height="430" zoom_freely="N"]
`
