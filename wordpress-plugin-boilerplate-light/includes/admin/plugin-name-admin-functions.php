<?php
/**
 * Plugin Name Admin Functions
 *
 * @since    1.0.0
 * @author   Your Name / Your Company Name
 * @category Core
 * @package  Plugin Name
 * @license  GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Get all Plugin Name screen ids
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function plugin_name_get_screen_ids() {
	$menu_name = strtolower( str_replace ( ' ', '-', Plugin_Name()->menu_name ) );

	$plugin_name_screen_id = PLUGIN_NAME_SCREEN_ID;

	return apply_filters( 'plugin_name_screen_ids', array(
		'toplevel_page_' . $plugin_name_screen_id,
		$plugin_name_screen_id . '_page_' . $plugin_name_screen_id . '_settings',
		$plugin_name_screen_id . '_page_' . $plugin_name_screen_id . '-settings',
		$plugin_name_screen_id . '_page_' . $plugin_name_screen_id . '-status',
		$menu_name . '_page_' . $plugin_name_screen_id . '_settings',
		$menu_name . '_page_' . $plugin_name_screen_id . '-settings',
		$menu_name . '_page_' . $plugin_name_screen_id . '-status',
	) );
} // END plugin_name_get_screen_ids()

/**
 * Output admin fields.
 *
 * Loops though the plugin name options array and outputs each field.
 *
 * @since  1.0.0
 * @access public
 * @param  array $options Opens array to output
 */
function plugin_name_admin_fields( $options ) {
	if ( ! class_exists( 'Plugin_Name_Admin_Settings' ) ) {
		include 'class-plugin-name-admin-settings.php';
	}

	Plugin_Name_Admin_Settings::output_fields( $options );
} // END plugin_name_admin_fields()

/**
 * Update all settings which are passed.
 *
 * @since  1.0.0
 * @access public
 * @param  array $options
 * @return void
 */
function plugin_name_update_options( $options ) {
	if ( ! class_exists( 'Plugin_Name_Admin_Settings' ) ) {
		include 'class-plugin-name-admin-settings.php';
	}

	Plugin_Name_Admin_Settings::save_fields( $options );
} // END plugin_name_update_options()

/**
 * Get a setting from the settings API.
 *
 * @since  1.0.0
 * @access public
 * @param  mixed $option_name
 * @param  mixed $default
 * @return string
 */
function plugin_name_settings_get_option( $option_name, $default = '' ) {
	if ( ! class_exists( 'Plugin_Name_Admin_Settings' ) ) {
		include 'class-plugin-name-admin-settings.php';
	}

	return Plugin_Name_Admin_Settings::get_option( $option_name, $default );
} // END plugin_name_settings_get_option()

/**
 * Hooks Plugin Name actions, when present in the $_REQUEST superglobal.
 * Every plugin_name_action present in $_REQUEST is called using
 * WordPress's do_action function. These functions are called on admin_init.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function plugin_name_do_actions() {
	if ( isset( $_REQUEST['plugin_name_action'] ) ) {
		do_action( 'plugin_name_' . $_REQUEST['plugin_name_action'], $_REQUEST );
	}
} // END plugin_name_do_actions()
add_action( 'admin_init', 'plugin_name_do_actions' );

?>
