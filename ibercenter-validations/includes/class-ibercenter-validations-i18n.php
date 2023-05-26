<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://www.digitalgroup.es/
 * @since      1.0.0
 *
 * @package    Ibercenter_Validations
 * @subpackage Ibercenter_Validations/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ibercenter_Validations
 * @subpackage Ibercenter_Validations/includes
 * @author     Digital Group <maria.perez@digitalgroup.es>
 */
class Ibercenter_Validations_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ibercenter-validations',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
