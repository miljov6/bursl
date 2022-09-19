<?php

/**
 * Template Name: About Us
 *
 */

get_header();
?>
<main id="primary" class="site-main aboutus">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/about-us/hero');
        get_template_part('template-parts/about-us/payroll-about-us');
        get_template_part('template-parts/about-us/video');
        get_template_part('template-parts/about-us/second');
        get_template_part('template-parts/about-us/first');
        get_template_part('template-parts/about-us/second-2');
        get_template_part('template-parts/about-us/first-1');
        get_template_part('template-parts/about-us/second-3');
        get_template_part('template-parts/about-us/book-demo');


    endwhile;
    ?>

</main>

<?php
get_footer();
