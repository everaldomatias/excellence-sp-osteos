<?php
get_header();

echo '<div class="wrap">';

    excellence_open_container();

    $companies = get_terms(
        [
            'taxonomy' => 'empresas'
        ]
    );

    if ( $companies ) :

        echo '<div class="list-companies">';

        foreach ( $companies as $company ) {
            $logo = get_term_meta( $company->term_id, 'logo', true );
            $logo = wp_get_attachment_image_url( $logo['ID'], 'medium' );
            $link = get_term_link( $company->term_id );

            if ( $logo ) : ?>

                <div class="item">
                    <a href="<?php echo esc_url( $link ); ?>" title="Clique e veja todos os produtos da empresa <?php echo esc_attr( $company->name ); ?>">
                        <img src="<?php echo esc_html( $logo ); ?>" alt="Clique e veja todos os produtos da empresa <?php echo esc_attr( $company->name ); ?>">
                    </a>
                </div>

            <?php endif;
        }

        echo '</div>';

    else :
        echo 'Nenhuma empresa encontrada';
    endif;

    excellence_close_container();

echo '</div>';

get_footer();