<?php

if ( ! function_exists( 'custom_covarage_page_template' ) ) {

    add_filter( 'page_template', 'custom_covarage_page_template' );

    function custom_covarage_page_template( $page_template ) {

        if ( is_page( 'abrangencia' ) ) {
            $page_template = SPOSTEOS . '/templates/page-abrangencia.php';
        }

        return $page_template;

    }

}