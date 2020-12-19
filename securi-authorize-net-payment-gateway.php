<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link            https://www.dynaggelos.com/
 * @version         0.0.1
 * @since           0.0.1
 * @package         securi-authorize-net-payment-gateway
 *
 * @wordpress-plugin
 * Plugin Name:     Securi Authorize.net Payment Gateway for WooCommerce
 * Plugin URI:      https://www.dynaggelos.com/
 * Description:     Adds an Authorize.net payment form to WooCommerce. Now you can securely connect your customers to Authorize.net for all customer-facing payments.
 * Version:         0.0.1
 * Author:          Joshua Gerrity
 * Author URI:      https://www.dynaggelos.com/
 * License:         GPL-3.0+
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:     securi-authorize-net-payment-gateway
 * Domain Path:     /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	exit;
}

define( 'SECURI_AUTHORIZE_NET_PAYMENT_GATEWAY_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/securi-authorize-net-payment-gateway-activator.php
 */
function activate_securi_authorize_net_payment_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/securi-authorize-net-payment-gateway-activator.php';
	SecuriAuthorizeNetPaymentGateway\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/securi-authorize-net-payment-gateway-deactivator.php
 */
function deactivate_securi_authorize_net_payment_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/securi-authorize-net-payment-gateway-deactivator.php';
	SecuriAuthorizeNetPaymentGateway\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_securi_authorize_net_payment_gateway' );
register_deactivation_hook( __FILE__, 'deactivate_securi_authorize_net_payment_gateway' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/securi-authorize-net-payment-gateway.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_securi_authorize_net_payment_gateway() {

	$plugin = new SecuriAuthorizeNetPaymentGateway\PluginMain();
	$plugin->run();

}
run_securi_authorize_net_payment_gateway();
