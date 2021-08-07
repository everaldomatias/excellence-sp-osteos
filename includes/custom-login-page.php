<?php

/**
 * Custom Login Page Functions
 */

if ( ! function_exists( 'excellence_client_custom_message_login' ) ) {

    /**
     * Print the message to help users in Login page
     */
    function excellence_client_custom_message_login() {
        echo '<div class="help-from-agp">Está com problemas ou dúvidas sobre seu site? Entre em contato com nossa equipe Web da <a href="https://agpagencia.com.br"><strong>AGP Agência</strong></a>.<br><br> Nos envie uma mensagem pelo <a href="https://api.whatsapp.com/send?phone=5511940138315&text=Ol%C3%A1%20AGP%20Ag%C3%AAncia.%20Preciso%20de%20ajuda%20com%20o%20meu%20site!">WhatsApp <b>(11) 9 4013 8315</a></b> ou envie um e-mail <a style="text-decoration: none;" href="mailto:' . antispambot( 'web@agpagencia.com.br' ) . '">clicando aqui!</a></div>';
    }
    add_action( 'login_footer', 'excellence_client_custom_message_login' );

}

if ( ! function_exists( 'excellence_client_login_headerurl' ) ) {

    /**
     * Changing the logo link from wordpress.org to AGP Agência
     */
    function excellence_client_login_headerurl() { 
        return 'https://agpagencia.com.br/';
    }
    add_filter( 'login_headerurl', 'excellence_client_login_headerurl' );

}

if ( ! function_exists( 'excellence_client_login_headertext' ) ) {

    /**
     * Changing the alt text on the logo to show AGP Agência de Comunicação
     */
    function excellence_client_login_headertext() {
        return 'AGP Agência de Comunicação';
    }
    add_filter( 'login_headertext', 'excellence_client_login_headertext' );

}