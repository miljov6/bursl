<?php
/**
* Template Name: Global Payroll Page
*
*/

get_header();
?>
<main id="primary" class="site-main global_payroll">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/global-payroll/hero' );
    get_template_part( 'template-parts/global-payroll/how-does' );
    get_template_part( 'template-parts/global-payroll/global-contract' );
    get_template_part( 'template-parts/global-payroll/single-click' );
    get_template_part( 'template-parts/global-payroll/insights' );
    get_template_part( 'template-parts/global-payroll/local-employee-portal' );
    get_template_part( 'template-parts/global-payroll/what-is-payroll' );
    get_template_part( 'template-parts/global-payroll/under-box' );

endwhile;
?>

</main>

<?php
get_footer();
