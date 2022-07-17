<!--TEMPLATE WHICH WILL DISPLAY SEARCH RESULTS - HOW THE SEARCH PAGE LOOKS WILL BE DETERMINED BY THIS (TEMPLATE FILE WHICH WILL DISPLAY SEARCH RESULTS - E.G. WHEN SOMEONE VISITS WP SITE AND HITS SEARCH BUTTON.)-->

<?php
    get_header();
?>

    <article class="content px-3 py-5 p-md-5">

    <?php
        if( have_posts() ){
            while( have_posts() ){
                the_post();
                get_template_part( 'template-parts/content', 'archive' );
            }
        }
    ?>

    </article>

    <?php
        get_footer();
    ?>