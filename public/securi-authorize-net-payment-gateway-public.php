<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.dynaggelos.com
 * @since      0.0.1
 *
 * @package    SecuriAuthorizeNetPaymentGateway
 * @subpackage SecuriAuthorizeNetPaymentGateway/public
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
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    SecuriAuthorizeNetPaymentGateway
 * @subpackage SecuriAuthorizeNetPaymentGateway/public
 * @author     Joshua Gerrity
 */
class PublicSection {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $SecuriAuthorizeNetPaymentGateway    The ID of this plugin.
	 */
	private $SecuriAuthorizeNetPaymentGateway;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.0.1
	 * @param      string    $SecuriAuthorizeNetPaymentGateway       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $SecuriAuthorizeNetPaymentGateway, $version ) {

		$this->SecuriAuthorizeNetPaymentGateway = $SecuriAuthorizeNetPaymentGateway;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in SecuriAuthorizeNetPaymentGateway_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SecuriAuthorizeNetPaymentGateway_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->SecuriAuthorizeNetPaymentGateway, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in SecuriAuthorizeNetPaymentGateway_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SecuriAuthorizeNetPaymentGateway_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->SecuriAuthorizeNetPaymentGateway, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

}
