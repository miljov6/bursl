<?php
/**
* Template Name: Global Benefits
*
*/

get_header();
?>
<main id="primary" class="site-main global_benefits_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/global-benefits/hero' );
    get_template_part( 'template-parts/global-benefits/how-it-works' );
    get_template_part( 'template-parts/global-benefits/medical-insurance' );
    get_template_part( 'template-parts/global-benefits/employee-share-schemes' );
    get_template_part( 'template-parts/global-benefits/pension-plans' );
    get_template_part( 'template-parts/global-benefits/benefits-for-contractors' );
    get_template_part( 'template-parts/global-benefits/partnering-benefits' );
    get_template_part( 'template-parts/global-benefits/benefits-for-the-business' );
    get_template_part( 'template-parts/global-benefits/insights' );
    get_template_part( 'template-parts/global-benefits/book-demo' );
    get_template_part( 'template-parts/global-benefits/faq' );


endwhile;
?>

</main>

<?php
get_footer();
