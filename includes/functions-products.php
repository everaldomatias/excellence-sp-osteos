<?php

/**
 * Add specific template om page `Empresas`
 */
function sp_page_template_companies( $page_template ) {
    if ( is_page( 'empresas' ) ) {
        $page_template = SPOSTEOS . '/templates/products/companies.php';
    }

    return $page_template;
}

add_filter( 'page_template', 'sp_page_template_companies' );

/**
 * Add specific template of the taxonomy `empresas`
 */
function sp_archive_template_companies( $template ) {

    if ( is_tax( 'empresas' ) ) {
        $template = SPOSTEOS . '/templates/products/archive.php';
    }

    return $template;

}

add_filter( 'archive_template', 'sp_archive_template_companies' );

/**
 * Add specific template of the single product
 */

 function sp_single_template_product( $template ) {

    if ( is_singular( 'produtos' ) ) {
        $template = SPOSTEOS . '/templates/products/single.php';
    }

    return $template;

 }

 add_filter( 'single_template', 'sp_single_template_product' );