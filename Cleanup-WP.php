<?php
/*
 * Plugin Name:       Cleanup WP
 * Plugin URI:        https://github.com/astrophyswthme/Cleanup-WP
 * Description:       Header cleanup and many usual custom settings used on every website setup as images     settings, privacy and basic admin customisations
 * Version:           1.0.0
 * Author:            Wajiha Rizvi  
 * Author URI:        https://profiles.wordpress.org/wajiharizvi29
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain:       wp-cbf
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-cbf-activator.php
 */
function activate_wp_cbf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf-activator.php';
	Wp_Cbf_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-cbf-deactivator.php
 */
function deactivate_wp_cbf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf-deactivator.php';
	Wp_Cbf_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_wp_cbf' );
register_deactivation_hook( __FILE__, 'deactivate_wp_cbf' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-cbf.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_cbf() {
	$plugin = new Wp_Cbf();
	$plugin->run();
}
run_wp_cbf();
