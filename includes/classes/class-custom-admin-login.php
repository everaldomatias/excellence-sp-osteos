<?php

/**
 * Main Excellence_Custom_Admin_Login Class
 *
 * @class Excellence_Custom_Admin_Login
 * @version	0.0.1
 * @since 0.0.1
 * @package	Excellence_Custom_Admin_Login
 */

class Excellence_Custom_Admin_Login {
    /**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;
	
    /**
	 * Return the plugin instance.
	 */
	public static function init() {
		die('11233');
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	/**
	 * Set up the plugin
	 */
	public function __construct() {
        die('1');
		add_action( 'login_enqueue_scripts', array( $this, 'custom_admin_css' ) );
		add_action( 'login_footer', array( $this, 'custom_message_login' ) );
	}

	/**
	 * Enqueue the CSS to Admin
	 *
	 * @return void
	 */
	public function custom_admin_css() {
		wp_enqueue_style( 'excellence-custom-admin-css', plugins_url( '/assets/css/excellence-client-admin.css', __FILE__ ) );
	}

	/**
	 * Print the message to help users in Login page
	 */
	public function custom_message_login() {
		echo '<div class="help-from-agp">Está com problemas ou dúvidas sobre seu site? Entre em contato com nossa equipe Web da <a href="https://agpagencia.com.br"><strong>AGP Agência</strong></a>.<br><br> Nos envie uma mensagem pelo <a href="https://api.whatsapp.com/send?phone=5511940138315&text=Ol%C3%A1%20AGP%20Ag%C3%AAncia.%20Preciso%20de%20ajuda%20com%20o%20meu%20site!">WhatsApp <b>(11) 9 4013 8315</a></b> ou envie um e-mail <a style="text-decoration: none;" href="mailto:' . antispambot( 'web@agpagencia.com.br' ) . '">clicando aqui!</a></div>';
	}

} // End Class
add_action( 'plugins_loaded', array( 'Excellence_Custom_Admin_Login', 'init' ) );