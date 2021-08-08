<?php
get_header();

echo '<div class="wrap">';

    if ( have_posts() ) {

        excellence_open_container();

        $logo = get_term_meta( get_queried_object_id(), 'logo', true );

        echo '<div class="about-company">';

            echo '<img src="' . esc_html( $logo['guid'] ) . '">';

            $term_description = term_description( get_queried_object_id() );

            if ( $term_description ) {
                echo apply_filters( 'the_content', $term_description );
            }

        echo '</div>';

        echo '<div class="list-products-company">';

            while ( have_posts() ) {
                the_post();

                if ( has_post_thumbnail()) {
                    echo '<div class="item">';
                        echo '<a href="' . get_the_permalink() . '">';
                            the_post_thumbnail( 'medium' );
                        echo '</a>';
                    echo '</div><!-- /.item -->';
                }

            }

        echo '</div>';

        excellence_close_container();
    }

echo '</div>';

get_footer();