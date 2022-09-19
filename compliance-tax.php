<?php
/**
* Template Name: Compliance-Tax
*
*/

get_header();
?>
<main id="primary" class="site-main compliance_tax">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/compliance-tax/hero' );
    get_template_part( 'template-parts/compliance-tax/how-it-works' );
    get_template_part( 'template-parts/compliance-tax/contract-compliance' );
    get_template_part( 'template-parts/compliance-tax/legal-compliance' );
    get_template_part( 'template-parts/compliance-tax/tax-compliance' );
    get_template_part( 'template-parts/compliance-tax/payroll-compliance' );
    get_template_part( 'template-parts/compliance-tax/benefits' );
    get_template_part( 'template-parts/compliance-tax/compliance-on-all' );
    get_template_part( 'template-parts/compliance-tax/data-protection' );
    get_template_part( 'template-parts/compliance-tax/avoid-compliance-fines' );
    get_template_part( 'template-parts/compliance-tax/why' );
    get_template_part( 'template-parts/compliance-tax/under-box' );

endwhile;
?>

</main>

<?php
get_footer();
