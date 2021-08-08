<?php
/**
 * Plugin Name:       Excellence SP Osteos
 * Description:       Plugin de personalizações para o site da empresa SP Osteos.
 * Plugin URI:        https://github.com/everaldomatias/excellence-sp-osteos
 * Version:           1.0.0
 * Author:            Everaldo Matias
 * Author URI:        https://everaldo.dev/
 * Requires at least: 3.0.0
 * Tested up to:      5.7.0
 *
 * @package ExcellenceSPOsteos
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'SPOSTEOS', plugin_dir_path( __FILE__ ) );

/**
 * Main ExcellenceSPOsteos Class
 *
 * @class ExcellenceSPOsteos
 * @version	0.0.1
 * @since 0.0.1
 * @package	ExcellenceSPOsteos
 */
class ExcellenceSPOsteos {

	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Plugin directory path
	 *
	 * @var string
	 */
	private $plugin_dir = null;

	/**
	 * Set up the plugin.
	 */
	function __construct() {
		
		$this->plugin_dir = plugin_dir_path( __FILE__ );
		add_action( 'init', array( $this, 'includes' ), 0 );
		//require_once 'includes/classes/class-custom-admin-login.php';
		//add_action( 'admin_init', array( 'Excellence_Custom_Admin_Login', 'init' ) );

	}

	/**
	 * Return the plugin instance.
	 */
	public static function init() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function includes() {

		// Load the functions.php
		require_once $this->plugin_dir . '/functions.php';

	}

} // End Class

/**
* Initialize the plugin actions.
*/
add_action( 'plugins_loaded', array( 'ExcellenceSPOsteos', 'init' ) );