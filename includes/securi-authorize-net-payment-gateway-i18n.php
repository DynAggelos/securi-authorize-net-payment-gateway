<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.dynaggelos.com
 * @since      0.0.1
 *
 * @package    SecuriAuthorizeNetPaymentGateway
 * @subpackage SecuriAuthorizeNetPaymentGateway/includes
 */

 /**
  * The Securi Authorize.net Payment Gateway Namespace
  *
  * @link       https://www.dynaggelos.com
  * @since      0.0.1
  *
  * @package    SecuriAuthorizeNetPaymentGateway
  */
namespace SecuriAuthorizeNetPaymentGateway;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    SecuriAuthorizeNetPaymentGateway
 * @subpackage SecuriAuthorizeNetPaymentGateway/includes
 * @author     Joshua Gerrity
 */
class i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
