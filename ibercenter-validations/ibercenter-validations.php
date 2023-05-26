<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.digitalgroup.es/
 * @since             1.0.0
 * @package           Ibercenter_Validations
 *
 * @wordpress-plugin
 * Plugin Name:       Ibercenter - Validations Form
 * Plugin URI:        https://https://www.digitalgroup.es/
 * Description:       Permite aplicar validaciones a los campos de formularios creados con Elementor
 * Version:           1.0.0
 * Author:            Digital Group
 * Author URI:        https://https://www.digitalgroup.es/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ibercenter-validations
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'IBERCENTER_VALIDATIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ibercenter-validations-activator.php
 */
function activate_ibercenter_validations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ibercenter-validations-activator.php';
	Ibercenter_Validations_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ibercenter-validations-deactivator.php
 */
function deactivate_ibercenter_validations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ibercenter-validations-deactivator.php';
	Ibercenter_Validations_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ibercenter_validations' );
register_deactivation_hook( __FILE__, 'deactivate_ibercenter_validations' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ibercenter-validations.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ibercenter_validations() {

	$plugin = new Ibercenter_Validations();
	$plugin->run();

}
run_ibercenter_validations();

// Add functions
require plugin_dir_path( __FILE__ ) . 'includes/elementor/functions.php';