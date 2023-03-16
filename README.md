![alt text align:center](http://wordprezi.appspot.com/assets/img/logo64x64.png "WordPrezi")

# WordPrezi

[![Last Version](https://img.shields.io/wordpress/plugin/v/wordprezi.svg?style=flat-square)](https://wordpress.org/plugins/wordprezi/)
[![Rates](https://img.shields.io/wordpress/plugin/r/wordprezi.svg?style=flat-square)](https://wordpress.org/support/view/plugin-reviews/wordprezi/)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/wordprezi.svg?style=flat-square)](https://wordpress.org/plugins/wordprezi/stats/)
[![License](https://img.shields.io/badge/license-GPLv3-red.svg?style=flat-square)](license.txt)

[WordPrezi](http://wordprezi.appspot.com/plugin) is a plugin to embed Prezi presentations into Wordpress blogposts.

Licensed under [GPLv3](https://www.gnu.org/licenses/gpl.html)

## Description

**WordPrezi** is a plugin to help embedding the beautiful Prezi presententions into Wordpress blogposts.

Follow [WordPrezi](https://twitter.com/WordPrezi).

For more information, check out [WordPrezi plugin website](http://wordprezi.appspot.com/plugin).

*If this plugin has been helpful, please take a moment to
[rate it](http://wordpress.org/support/view/plugin-reviews/wordprezi#postform)!*

## Installation

### From your WordPress dashboard

1. Visit *Plugins > Add New*
1. Search for '*WordPrezi*'
1. Activate the plugin through the *Plugins* menu in WordPress
1. Done!

### From WordPress.org

1. Download [WordPrezi plugin](https://wordpress.org/plugins/wordprezi/)
1. Upload `wordprezi` directory to the `/wp-content/plugins/` directory via stp, sftp, ftp, etc...
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Done!

## Usage

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

## Frequently Asked Questions

**Q**: Is this plugin related with WordPrezi (http://wordprezi.appspot.com) for Wordpress.com?  
**A**: YES! This is the alternative option for self-hosted Wordpress blog users.

**Q**: Can this plugin be incorporated by Wordpress.com some day?  
**A**: Hard to tell, but I really hope so. It would be great if Wordpress.com team could do that.

## Changelog

### 0.8.3 - 2023-03-10
* Tested with WP up to 6.1.1

### 0.8.1 - 2020-10-28
* Hotfix: HTTPS support
* Added support for New Prezi
* Tested with WP up to 5.5.1

### 0.7 - 2018-03-19
* Added support [Prezi Next](https://blog.prezi.com/prezi-next/)
* Tested with WP up to 4.9.4

### 0.6.4 - 2017-06-01
* Tested with WP 4.8

### 0.6.3 - 2014-09-11
* Tested with WP 4.7

### 0.5 - 2014-09-11
* Tested with WP 4.0
* Prezi HTML5 comptibility

### 0.2 - 2014-04-24
* Bug fix WP 3.9 compatibility

### 0.1
* First release of WordPrezi plugin
