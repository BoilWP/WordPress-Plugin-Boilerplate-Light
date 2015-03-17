<?php
/**
 * Plugin Name Formatting
 *
 * @todo     Place your formatting functions here.
 * @since    1.0.0
 * @author   Your Name / Your Company Name
 * @category Core
 * @package  Plugin Name/Functions
 * @license  GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Clean variables
 *
 * @since  1.0.0
 * @access public
 * @param  string $var
 * @return string
 */
function plugin_name_clean( $var ) {
	return sanitize_text_field( $var );
} // END plugin_name_clean()

/**
 * Merge two arrays
 *
 * @since  1.0.0
 * @access public
 * @param  array $a1
 * @param  array $a2
 * @return array
 */
function plugin_name_array_overlay( $a1, $a2 ) {
  foreach( $a1 as $k => $v ) {
    if ( ! array_key_exists( $k, $a2 ) ) {
      continue;
    }
    if ( is_array( $v ) && is_array( $a2[ $k ] ) ) {
        $a1[ $k ] = plugin_name_array_overlay( $v, $a2[ $k ] );
    } else {
        $a1[ $k ] = $a2[ $k ];
    }
  }

  return $a1;
} // END plugin_name_array_overlay()

?>
