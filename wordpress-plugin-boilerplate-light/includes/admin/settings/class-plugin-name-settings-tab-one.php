<?php
/**
 * Plugin Name First Tab Settings
 *
 * @since    1.0.0
 * @author   Your Name / Your Company Name
 * @category Admin
 * @package  Plugin Name
 * @license  GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Plugin_Name_Settings_First_Tab' ) ) {

/**
 * Plugin_Name_Settings_First_Tab
 */
class Plugin_Name_Settings_First_Tab extends Plugin_Name_Settings_Page {

	/**
	 * Constructor.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function __construct() {
		$this->id    = 'tab_one';
		$this->label = __( 'First Tab', PLUGIN_NAME_TEXT_DOMAIN );

		add_filter( 'plugin_name_settings_submenu_array',           array( $this, 'add_menu_page' ),     20 );
		add_filter( 'plugin_name_settings_tabs_array',              array( $this, 'add_settings_page' ), 20 );
		add_action( 'plugin_name_settings_' . $this->id,            array( $this, 'output' ) );
		add_action( 'plugin_name_settings_save_' . $this->id,       array( $this, 'save' ) );
		add_action( 'plugin_name_settings_start',                   array( $this, 'settings_top' ) );
		add_action( 'plugin_name_settings_start_tab_' . $this->id,  array( $this, 'settings_top_this_tab_only' ) );
		add_action( 'plugin_name_settings_finish',                  array( $this, 'settings_bottom' ) );
		add_action( 'plugin_name_settings_finish_tab_' . $this->id, array( $this, 'settings_bottom_this_tab_only' ) );
	} // END __construct()

	/**
	 * Save settings
	 *
	 * @since  1.0.0
	 * @access public
	 * @global $current_tab
	 */
	public function save() {
		global $current_tab;

		$settings = $this->get_settings();

		Plugin_Name_Admin_Settings::save_fields( $settings, $current_tab );
	}

	/**
	 * Get settings array
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_settings() {

		return apply_filters( 'plugin_name_' . $this->id . '_settings', array(

			array(
				'title' => __( 'Settings Title', PLUGIN_NAME_TEXT_DOMAIN ),
				'type'  => 'title',
				'desc'  => '',
				'id'    => $this->id . '_options'
			),

			array(
				'title'   => __( 'Single Checkbox', PLUGIN_NAME_TEXT_DOMAIN ),
				'desc'    => __( 'Can come in handy to display more options.', PLUGIN_NAME_TEXT_DOMAIN ),
				'id'      => 'plugin_name_checkbox',
				'default' => 'no',
				'type'    => 'checkbox'
			),

			array(
				'title'    => __( 'Single Input (Text) ', PLUGIN_NAME_TEXT_DOMAIN ),
				'desc'     => '',
				'id'       => 'plugin_name_input_text',
				'default'  => __( 'This admin setting can be hidden via the checkbox above.', PLUGIN_NAME_TEXT_DOMAIN ),
				'type'     => 'text',
				'css'      => 'min-width:300px;',
				'autoload' => false
			),

			array(
				'title'    => __( 'Single Textarea ', PLUGIN_NAME_TEXT_DOMAIN ),
				'desc'     => '',
				'id'       => 'plugin_name_input_textarea',
				'default'  => __( 'You can allow the user to use this field to enter their own CSS or HTML code.', PLUGIN_NAME_TEXT_DOMAIN ),
				'type'     => 'textarea',
				'css'      => 'min-width:300px;',
				'autoload' => false
			),

			array(
				'title'   => __( 'Remove all data on uninstall', PLUGIN_NAME_TEXT_DOMAIN ),
				'desc'    => __( 'This will delete all data when uninstalling via Plugins > Delete.', PLUGIN_NAME_TEXT_DOMAIN ),
				'id'      => 'plugin_name_uninstall_data',
				'default' => 'no',
				'type'    => 'checkbox'
			),

			array( 'type' => 'sectionend', 'id' => $this->id . '_options'),

		)); // End general settings
	}

}

} // end if class exists

return new Plugin_Name_Settings_First_Tab();

?>
