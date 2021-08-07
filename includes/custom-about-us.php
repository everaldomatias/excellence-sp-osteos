<?php

if ( ! function_exists( 'excellence_body_class_about_us' ) ) {

    /**
     * 
     * Add custom class on body of the page About Us
     * 
     * @see https://developer.wordpress.org/reference/functions/body_class/
     * 
     */
    function excellence_body_class_about_us( $classes ) {

        if ( is_page( 'about-us' ) ) {
            $classes[] = 'page-about-us';
        }
        return $classes;

    }
    add_filter( 'body_class', 'excellence_body_class_about_us' );

}

if ( ! function_exists( 'excellence_about_us_locale' ) ) {
    
    function excellence_about_us_locale( $locale ) {
    
        if ( is_page( 'about-us' ) ) {
            return 'en_US';
        }
        return $locale;
        
    }
    add_filter( 'locale', 'excellence_about_us_locale' );

}

if ( ! function_exists( 'excellence_about_us_header' ) ) {

    function excellence_about_us_header() {

        echo '<div class="excellence-translate">';

            if ( ! is_page( 'about-us' ) ) {
                echo '<a href="' . home_url( "about-us" ) . '"><img class="excellence-en" src="' . plugins_url( '../assets/images/usa.png', __FILE__ ) . '"></a>';
            } else {
                echo '<a href="' . home_url( "sp-osteos-quem-somos" ) . '"><img class="excellence-br" src="' . plugins_url( '../assets/images/brazil.png', __FILE__ ) . '"></a>';
            }

        echo '</div><!-- /.excellence-translate -->';

    }
    add_action( 'wp_head', 'excellence_about_us_header' );

}
