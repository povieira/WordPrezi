<?php
/**
 * Plugin Name: WordPrezi
 * Plugin URI: http://wordprezi.appspot.com/plugin
 * Description: Easy way to embed Prezi presentations in Wordpress blogposts
 * Version: 0.9
 * Author: Pablo
 * Author URI: http://pv8.io
 * License: GPLv3
 */

/*  Copyright 2013  WordPrezi  (email : wordprezi@pv8.io)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//define('WP_DEBUG', true);

define( 'URL_PATTERN', "/^(https?):\/\/.*prezi\.com\/(.+)/" );

function validate_params( $atts ) {

	extract( shortcode_atts( array(
		'url' => null,
		'width' => 500,
		'height' => 400,
		'zoom_freely' => 'N',
		'use_html5' => 'N'
	), $atts ) );

	$err_msg = '';

	// check URL
	if ( !$url || !preg_match( URL_PATTERN, $url ) ) {
		$err_msg .= "- invalid Prezi URL (found '$url')<br>";
	}

	// check width and height
	if ( ! is_numeric( $width ) || ! is_numeric( $height ) ) {
		$err_msg .= "- width/height must be numeric (found width='$width', height='$height')<br>";
	}

	if ( $err_msg ) {
		return "<em><strong>[WordPrezi plugin error:</strong><br>" . PHP_EOL .
			$err_msg . "<strong>]</strong></em>";
	} else {
		return null;
	}
}

function wordprezi_shortcode( $atts ) {

	$params_errors = validate_params( $atts );

	if ( $params_errors ) {
		return $params_errors;
	}

	extract( shortcode_atts( array(
		'url' => null,
		'width' => 550,
		'height' => 400
	), $atts ) );

	preg_match( URL_PATTERN, $url, $url_parts );

	$path_parts = explode('/', rtrim($url_parts[2], '/'));

	if (count($path_parts) > 1 && $path_parts[0] == 'p' && $path_parts[1] == 'embed') {
		$prezi_id = preg_replace('/[^A-Za-z0-9\-]/', '', $path_parts[2]);
	} elseif (count($path_parts) > 1 && ($path_parts[0] == 'view' || $path_parts[0] == 'p')) {
		$prezi_id = preg_replace('/[^A-Za-z0-9\-]/', '', $path_parts[1]);
	} else {
		$prezi_id = preg_replace('/[^A-Za-z0-9\-]/', '', $path_parts[0]);
	}
	return "<!-- begin WordPrezi -->" . PHP_EOL .
		"<iframe src='https://prezi.com/p/embed/{$prezi_id}/' id='iframe_container' " .
		"frameborder='0' webkitallowfullscreen='' mozallowfullscreen='' " .
		"allowfullscreen='' allow='autoplay; fullscreen' " .
		"height='{$height}' width='{$height}'></iframe>" . PHP_EOL .
		"<!-- end WordPrezi -->" . PHP_EOL;

}

add_shortcode( 'prezi', 'wordprezi_shortcode' );

?>
