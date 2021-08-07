<?php

add_action( 'excellence_after_header', 'excellence_sp_osteos_title' );

function excellence_sp_osteos_title() {

    if ( ! is_home() ) {

        echo '<section class="excellence-sp-osteos-title">';
                
            excellence_open_container();

                echo '<h1 class="custom-title entry-title">';
                    the_title();
                echo '</h1>';

            excellence_close_container();

        echo '</section><!-- /.excellence-sp-osteos-title -->';
    
    }

}