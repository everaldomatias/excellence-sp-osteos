<?php

/**
 * 
 * Template to Coverage Page
 * Template name: Abrangência
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */
get_header(); ?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
            the_post();
            
            echo '<section class="coverage-hero">';

                excellence_open_container();

                    echo '<div class="tilte-hero">';

                        echo '<h2 class="entry-title">';
                            echo 'Nossa Abrangência';
                        echo '</h2><!-- /.entry-title -->';

                        if ( ! is_page() ) {
                            echo '<div class="summary-hero">';
                                echo excellence_get_excerpt( get_the_content(), 250, ' ...' );
                            echo '</div><!-- /.summary-hero -->';
                        }

                    echo '</div><!-- /.title-hero -->';

                excellence_close_container();

            echo '</section><!-- /.coverage-hero -->';

			excellence_open_container();

                echo '<div class="entry-content">';

                    echo '<div class="col">';
                        the_content();
                    echo '</div><!-- /.col -->';
                                        
                echo '</div><!-- /.entry-content -->';

            excellence_close_container();
		}
    }

	?>

</main><!-- /#site-content -->

<?php
get_footer();