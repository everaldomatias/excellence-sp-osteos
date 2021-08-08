<?php

if ( ! function_exists( 'excellence_client_enqueue_login_page_scripts' ) ) {

    /**
     * Enqueue Login Page Scripts
     */
    function excellence_client_enqueue_login_page_scripts() {
        wp_enqueue_style( 'excellence-login-page', plugin_dir_url( __FILE__ ) . '/assets/css/excellence-client-login-page.css' );
    }
    add_action( 'login_init', 'excellence_client_enqueue_login_page_scripts' );

}

if ( ! function_exists( 'excellence_client_enqueue_scripts' ) ) {

    /**
     * Enqueue Admin Scripts
     */
    function excellence_client_enqueue_scripts() {
        wp_enqueue_style( 'excellence-admin', plugin_dir_url( __FILE__ ) . '/assets/css/excellence-client-admin.css' );
    }
    add_action( 'admin_enqueue_scripts', 'excellence_client_enqueue_scripts' );

}

if ( ! function_exists( 'excellence_sp_osteos_scripts' ) ) {

    /**
     * Enqueue Custom CSS on frontend Page Scripts
     */
    function excellence_sp_osteos_scripts() {
        wp_enqueue_style( 'excellence-sp-osteos', plugin_dir_url( __FILE__ ) . 'assets/css/excellence-client.css' );
        
        if ( is_page( 'about-us' ) ) {

            wp_enqueue_script( 'excellence-sp-osteos', plugin_dir_url( __FILE__ ) . 'assets/js/excellence-client.js' );

        }
    }
    add_action( 'wp_enqueue_scripts', 'excellence_sp_osteos_scripts' );

}

/**
 * Custom Login Page
 */
require_once SPOSTEOS . '/includes/custom-login-page.php';

/**
 * Custom Links on Footer
 */
require_once SPOSTEOS . '/includes/custom-links-footer.php';

/**
 * Custom Page Coverage
 */
require_once SPOSTEOS . '/includes/custom-page-coverage.php';

/**
 * Custom Title
 */
require_once SPOSTEOS . '/includes/custom-title.php';

/**
 * Product functions
 */
require_once SPOSTEOS . '/includes/functions-products.php';

/**
 * Custom About Us
 */
require_once SPOSTEOS . '/includes/custom-about-us.php';

if ( ! function_exists( 'excellence_footer_3_columns_custom' ) ) {

    remove_action( 'excellence_footer', 'excellence_footer_3_columns', 10 );
    add_action( 'excellence_footer', 'excellence_footer_3_columns_custom', 10 );

    /**
     * 
     * Print footer with 3 columns
     * 
     * @author Everaldo Matias - https://everaldo.dev
     * 
     * @since 03/04/2020
     * @version 1.0 - 03/04/2020
     * 
     */

    function excellence_footer_3_columns_custom() {

        echo '<div class="col">';

            echo '<h2>Atendimento Especializado</h2>';
            echo '<p>Profissionais treinados e equipamentos homologados pela Agência Nacional de Vigilância Sanitária (Anvisa).</p>';
            echo '<p><br></p>';
            echo '<p>Solicite a visita dos nossos representantes!</p>';

        echo '</div><!-- /.col -->';

        echo '<div class="col">';
            excellence_footer_menu();
        echo '</div><!-- /.col -->';

        echo '<div class="col">';
            the_social_icons();
            echo '<h2 class="site-title">' . esc_html( get_bloginfo( 'name' ) ) . '</h2>';
            excellence_address_infos();
            excellence_contact_infos();
        echo '</div><!-- /.col -->';

    }

}