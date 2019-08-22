<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/fightforthefuture
 * @since             1.0.0
 * @package           Digital_Climate_Strike_Wordpress
 *
 * @wordpress-plugin
 * Plugin Name:       Digital Climate Strike Wordpress
 * Plugin URI:        https://github.com/fightforthefuture/digital-climate-strike-wordpress
 * Description:       This plugin allows you to easily add the Digital #ClimateStrike widget to you wordpress site.
 * Version:           1.0.0
 * Author:            Fight For the Future
 * Author URI:        https://github.com/fightforthefuture
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       digital-climate-strike-wordpress
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
define( 'DIGITAL_CLIMATE_STRIKE_WORDPRESS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-digital-climate-strike-wordpress-activator.php
 */
function activate_digital_climate_strike_wordpress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-digital-climate-strike-wordpress-activator.php';
	Digital_Climate_Strike_Wordpress_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-digital-climate-strike-wordpress-deactivator.php
 */
function deactivate_digital_climate_strike_wordpress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-digital-climate-strike-wordpress-deactivator.php';
	Digital_Climate_Strike_Wordpress_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_digital_climate_strike_wordpress' );
register_deactivation_hook( __FILE__, 'deactivate_digital_climate_strike_wordpress' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-digital-climate-strike-wordpress.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_digital_climate_strike_wordpress() {

	$plugin = new Digital_Climate_Strike_Wordpress();
	$plugin->run();

}
run_digital_climate_strike_wordpress();
