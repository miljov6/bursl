<?php
/**
* Template Name: Finance Teams
*
*/

get_header();
?>
<main id="primary" class="site-main finance_teams">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/finance-teams/hero' );
    get_template_part( 'template-parts/finance-teams/global-payment-solution' );
    get_template_part( 'template-parts/finance-teams/business-admin-automation' );
    get_template_part( 'template-parts/finance-teams/saving-money' );
    get_template_part( 'template-parts/finance-teams/payment-fees-reduction' );
    get_template_part( 'template-parts/finance-teams/payment-options' );
    get_template_part( 'template-parts/finance-teams/tax-documents-automation' );
    get_template_part( 'template-parts/finance-teams/centralized-international-employment' );
    get_template_part( 'template-parts/finance-teams/finance-dashboarding' );
    get_template_part( 'template-parts/finance-teams/book-demo' );
    get_template_part( 'template-parts/finance-teams/faq' );


endwhile;
?>

</main>

<?php
get_footer();
