<?php
/**
 * Plugin Name: WordPrezi
 * Plugin URI: http://wordprezi.appspot.com/plugin
 * Description: Easy way to embed Prezi presentations in Wordpress blogposts
 * Version: 0.2
 * Author: Pablo O Vieira
 * Author URI: http://povieira.com
 * License: GPLv3
 */

/*  Copyright 2013  Pablo O Vieira (povieira)  (email : wordprezi@povieira.com)

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

define( 'URL_PATTERN', "/.*prezi\.com\/(.+?)\/.*/" );

function validate_params( $atts ) {

	extract( shortcode_atts( array(
		'url' => null,
		'width' => 500,
		'height' => 400,
		'zoom_freely' => 'N'
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
		'height' => 400,
		'zoom_freely' => 'N'
	), $atts ) );

	preg_match( URL_PATTERN, $url, $output_array );
	
	$id = $output_array[1];
	$lock_to_path = ( strtoupper( $zoom_freely ) === 'Y'? 0: 1 );
	
     
	return "<!-- begin WordPrezi -->" . PHP_EOL .
		"<iframe src='http://prezi.com/embed/{$id}/?bgcolor=ffffff&amp;" .
		"lock_to_path={$lock_to_path}&amp;autoplay=no&amp;autohide_ctrls=0" .
		"&amp;features=undefined&amp;disabled_features=undefined' " .
		"width='{$width}' height='{$height}' frameBorder='0'></iframe>" . PHP_EOL .
		"<!-- end WordPrezi -->" . PHP_EOL;
}

add_shortcode( 'prezi', 'wordprezi_shortcode' );

?>
