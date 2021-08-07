<?php

if ( ! function_exists( 'excellence_links_footer' ) ) {

    /**
     * 
     * Adiciona links personalizados em algumas páginas do site através do hook 'excellence_before_footer'
     * 
     * @since 1.0 20/04/2020
     * @version 1.0 20/04/2020
     * @author [Everaldo Matias](https://everaldo.dev)
     * 
     */

    add_action( 'excellence_before_footer', 'excellence_links_footer', 0 );

    function excellence_links_footer() {

        if ( is_page( 'Fale Conosco' ) || is_page( 'Contato' ) || is_page( 'Contatos' ) || is_page( 'fale-com-nossa-equipe' ) ) {

            echo '<section class="excellence-links-footer">';
            
                excellence_open_container();

                    echo '<a href="' . esc_url( home_url( 'produtos' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>Conheça Nossos Produtos</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';
                    
                    echo '<a href="' . esc_url( home_url( 'abrangencia' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>Nossa Abrangência</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';

                excellence_close_container();

            echo '</section><!-- /.excellence-links-footer -->';

        } // Endif is_page( 'Fale Conosco' ) || is_page( 'Contato' ) || is_page( 'Contatos' ) || is_page( 'fale-com-nossa-equipe' )

        if ( is_page( 'Abrangência' ) || is_page( 'Nossa Abrangência' ) || is_page( 'Trabalhando para estar sempre perto' ) ) {

            echo '<section class="excellence-links-footer">';
            
                excellence_open_container();

                    echo '<a href="' . esc_url( home_url( 'produtos' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>Conheça Nossos Produtos</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';
                    
                    echo '<a href="' . esc_url( home_url( 'sp-osteos-quem-somos' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>SP-Osteos, Quem Somos</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';

                excellence_close_container();

            echo '</section><!-- /.excellence-links-footer -->';

        } // Endif is_page( 'Abrangência' ) || is_page( 'Nossa Abrangência' ) || is_page( 'Trabalhando para estar sempre perto' )

        if ( is_page( 'Quem Somos' ) || is_page( 'SP-Osteos, Quem Somos' ) ) {

            echo '<section class="excellence-links-footer">';
            
                excellence_open_container();

                    echo '<a href="' . esc_url( home_url( 'produtos' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>Conheça Nossos Produtos</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';
                    
                    echo '<a href="' . esc_url( home_url( 'fale-com-nossa-equipe' ) ) . '">';
                    
                        echo '<div class="col">';
                            echo '<h2>Fale Conosco</h2>';
                        echo '</div><!-- /.col -->';
                    
                    echo '</a>';
                    
                excellence_close_container();

            echo '</section><!-- /.excellence-links-footer -->';

        } // Endif is_page( 'Quem Somos' ) || is_page( 'SP-Osteos, Quem Somos' )

    }

}