<?php
/**
 * Plugin Name Core Functions
 *
 * General core functions available on both the front-end and admin.
 *
 * @since    1.0.0
 * @author   Your Name / Your Company Name
 * @category Core
 * @package  Plugin Name
 * @license  GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Include core functions
include( 'plugin-name-conditional-functions.php' );
include( 'plugin-name-formatting-functions.php' );

/**
 * Retrieve page ids. returns -1 if no page is found
 *
 * @since  1.0.0
 * @access public
 * @param  string $page
 * @return int
 */
function plugin_name_get_page_id( $page ) {
	$page = apply_filters( 'plugin_name_get_' . $page . '_page_id', get_option('plugin_name_' . $page . '_page_id' ) );

	return $page ? $page : -1;
} // END plugin_name_get_page_id()

/**
 * Get an image size.
 *
 * Variable is filtered by plugin_name_get_image_size_{image_size}
 *
 * @since  1.0.0
 * @access public
 * @param  string $image_size
 * @return array
 */
function plugin_name_get_image_size( $image_size ) {
	if ( in_array( $image_size, array( '_thumbnail', '_single' ) ) ) {
		$size           = get_option( $image_size . '_image_size', array() );
		$size['width']  = isset( $size['width'] ) ? $size['width'] : '300';
		$size['height'] = isset( $size['height'] ) ? $size['height'] : '300';
		$size['crop']   = isset( $size['crop'] ) ? $size['crop'] : 1;
	}
	else {
		$size = array(
			'width'  => '300',
			'height' => '300',
			'crop'   => 1
		);
	}
	return apply_filters( 'plugin_name_get_image_size_' . $image_size, $size );
} // END plugin_name_get_image_size()

/**
 * Queue some JavaScript code to be output in the footer.
 *
 * @since  1.0.0
 * @access public
 * @param  string $code
 * @global $plugin_name_queued_js
 */
function plugin_name_enqueue_js( $code ) {
	global $plugin_name_queued_js;

	if ( empty( $plugin_name_queued_js ) )
		$plugin_name_queued_js = "";

	$plugin_name_queued_js .= "\n" . $code . "\n";
} // END plugin_name_enqueue_js()

/**
 * Output any queued javascript code in the footer.
 *
 * @since  1.0.0
 * @access public
 * @global $plugin_name_queued_js
 * @return $plugin_name_queued_js
 */
function plugin_name_print_js() {
	global $plugin_name_queued_js;

	if ( ! empty( $plugin_name_queued_js ) ) {

		echo "<!-- Plugin Name JavaScript-->\n<script type=\"text/javascript\">\njQuery(document).ready(function($) {";

		// Sanitize
		$plugin_name_queued_js = wp_check_invalid_utf8( $plugin_name_queued_js );
		$plugin_name_queued_js = preg_replace( '/&#(x)?0*(?(1)27|39);?/i', "'", $plugin_name_queued_js );
		$plugin_name_queued_js = str_replace( "\r", '', $plugin_name_queued_js );

		echo $plugin_name_queued_js . "});\n</script>\n";

		unset( $plugin_name_queued_js );
	}
} // END plugin_name_print_js()

/**
 * Set a cookie - wrapper for setcookie using WP constants
 *
 * @since 1.0.0
 * @param string  $name   Name of the cookie being set
 * @param string  $value  Value of the cookie
 * @param integer $expire Expiry of the cookie
 * @return void
 */
function plugin_name_setcookie( $name, $value, $expire = 0 ) {
	if ( ! headers_sent() ) {
		setcookie( $name, $value, $expire, COOKIEPATH, COOKIE_DOMAIN, false );
	} else if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
		trigger_error( "Cookie cannot be set - headers already sent", E_USER_NOTICE );
	}
} // END plugin_name_setcookie()

?>
