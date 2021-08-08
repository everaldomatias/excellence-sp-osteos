<?php
get_header(); ?>

<main id="site-content" role="main">

	<?php

    excellence_open_container();

        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();

                the_content();
            }
        }

    excellence_close_container();

	?>

</main><!-- /#site-content -->

<?php
get_footer();