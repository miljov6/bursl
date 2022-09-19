<?php
/**
* Template Name: Contracts
*
*/

get_header();
?>
<main id="primary" class="site-main contracts">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/contracts/hero' );
    get_template_part( 'template-parts/contracts/how-it-works' );
    get_template_part( 'template-parts/contracts/local-compliance' );
    get_template_part( 'template-parts/contracts/employer-of-record' );
    get_template_part( 'template-parts/contracts/how-it-works-2' );
    get_template_part( 'template-parts/contracts/global-hiring' );
    get_template_part( 'template-parts/contracts/employee-cost-calculation' );
    get_template_part( 'template-parts/contracts/global-benefits' );
    get_template_part( 'template-parts/contracts/why-work-with' );
    get_template_part( 'template-parts/contracts/book-demo' );
    get_template_part( 'template-parts/contracts/faq' );
    get_template_part( 'template-parts/contracts/under-box' );

endwhile;
?>

</main>

<?php
get_footer();
