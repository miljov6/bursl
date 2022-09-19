<?php

/**
 * Template Name: Payments
 *
 */

get_header();
?>
<main id="primary" class="site-main payments_page">
    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/payments/hero');
        get_template_part('template-parts/payments/payroll-processes');
        get_template_part('template-parts/payments/global-one-click');
        get_template_part('template-parts/payments/admin');
        get_template_part('template-parts/payments/your-data');
        get_template_part('template-parts/payments/fully-compliant');
        get_template_part('template-parts/payments/enterprise-grade-security');
        get_template_part('template-parts/payments/localised-payroll');
        get_template_part('template-parts/payments/integrate-with-tools');
        get_template_part('template-parts/payments/unlock-global-potential');
        get_template_part('template-parts/payments/integrate-with-businesses');
        get_template_part('template-parts/payments/book-demo');
        get_template_part('template-parts/payments/faq');
        get_template_part('template-parts/payments/under-box');


    endwhile;
    ?>

</main>

<?php
get_footer();
